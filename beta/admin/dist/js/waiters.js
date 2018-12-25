$(document).ready(function(){
    var restaurantKey;
    var userID;
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            // User is signed in.
            var displayName = user.displayName;
            var email = user.email;
            var emailVerified = user.emailVerified;
            var photoURL = user.photoURL;
            var isAnonymous = user.isAnonymous;
            var uid = user.uid;
            var providerData = user.providerData;
            var databaseRef = firebase.database().ref('waiters/');
            var rowIndex = 1;

            databaseRef.once('value', function(snapshot) {
                snapshot.forEach(function(childSnapshot) {
                    var childKey = childSnapshot.key;
                    var childData = childSnapshot.val();
                    userID=childKey;
                    if(childData.email==email){
                        restaurantKey=childData.restaurantKey
                        fetch_data(restaurantKey);
                    }
                });
            });
        } else {
            // User is signed out.
            window.location="login.php";
        }
    });
    fetch_data();


    var rowIndex = 1;
    function fetch_data(restaurantKey){
        $('#dataContent').empty();
        var databaseRef = firebase.database().ref('waiters/');


        databaseRef.once('value', function(Snapshot){

            Snapshot.forEach(function(waitersSnapshot) {
                var dataElement='';
                var WaiterKey = waitersSnapshot.key;
                var waiterID=WaiterKey;
                var WaiterData = waitersSnapshot.val();
                var waiterName=WaiterData.name;
                var waiterEmail=WaiterData.email;
                var waiterRating=WaiterData.rating;
                if(restaurantKey==WaiterData.restaurantKey){
dataElement+='<div id="waiterDiv'+waiterID+'" class="box box-info collapsed-box">' +
    '<div class="box-header with-border">' +
    '<div class="row">' +
    '<div class="col-md-4 form-group">' +
    '<label>Waiter Name</label>' +
    '<input  data-waiterid="'+waiterID+'" type="text" class="form-control waiterName" value="'+waiterName+'" />' +
    '</div>' +
    '<div class="col-md-4">' +
    '<label >Waiter Email</label>' +
    '<br>' +
    '<input data-waiterid="'+waiterID+'"  class="form-control waiterEmail"  type="text" value="'+waiterEmail+'">' +
    '</div>' +
    '<div class="col-md-3">' +
    '<label>Waiter Rating</label>' +
    '<br>' +
    '<input type="text" value="'+waiterRating+'" class="form-control waiterRating" data-waiterid="'+waiterID+'" placeholder="Waiter Rating">' +
    '</div>' +
    '<div class="col-md-1">' +
    '<label>Delete</label>' +
    '<br>' +
    '<button type="button" class="btn btn-danger btnDelete" data-waiterid="'+waiterID+'">Delete</button>' +
    '</div>' +
    '</div></div></div>';
                }

                    $('#dataContent').append(dataElement);

            });
        });
    }


    $(document).on("blur",".waiterName",function(e){
        var waiterID=$(this).data("waiterid");
        var waiterName=$(this).val();
        var updates = {};
        updates['/waiters/'+waiterID+'/name'] = waiterName;
        firebase.database().ref().update(updates);
    });
    $(document).on("blur",".waiterEmail",function(e){
        var waiterID=$(this).data("waiterid");
        var waiterEmail=$(this).val();
        var updates = {};
        updates['/waiters/'+waiterID+'/email'] = waiterEmail;
        firebase.database().ref().update(updates);
    });
    $(document).on("blur",".waiterRating",function(e){
        var waiterID=$(this).data("waiterid");
        var waiterRating=$(this).val();
        var updates = {};
        updates['/waiters/'+waiterID+'/rating'] = waiterRating;
        firebase.database().ref().update(updates);
    });
    function reload_page(){
        window.location.reload();
    }
        $(document).on("submit","#FormAdd",function(e){
            e.preventDefault();
            start_loader();
            var checked;
            var waiterName=$("#waiterName").val();
            var waiterEmail = $("#waiterEmail").val();
            var waiterRating =$("#waiterRating").val();
                var waiterID = firebase.database().ref().child('waiters/').push().key;

                        var data = {email:waiterEmail,name:waiterName,rating:waiterRating,restaurantKey:restaurantKey}
                        var updates = {};
                        updates['/waiters/'+waiterID+'/'] = data;
                        firebase.database().ref().update(updates);
            fetch_data();
            $('#FormAdd')[0].reset();
                        stop_loader();

        });
        $(document).on('keydown','.number_input',function(e){
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
        $(document).on("click",".btnDelete",function(){
            var waiterID=$(this).data("waiterid");

            if(confirm("Are you sure you want to delete this item ?")){
                firebase.database().ref().child('/waiters/'+waiterID).remove();
                fetch_data();
            }
        });
        function start_loader(){

            $.loadingBlockShow({
                imgPath: 'assets/img/default.svg',
                text: 'Loading ...',
                style: {
                    position: 'fixed',
                    width: '100%',
                    height: '100%',
                    background: 'rgba(0, 0, 0, .8)',
                    left: 0,
                    top: 0,
                    zIndex: 10000
                }
            });



        }
        function stop_loader(){
            $.loadingBlockHide();
        }



});

