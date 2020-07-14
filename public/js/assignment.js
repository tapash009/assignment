$(document).ready(function () {
    /** First Assignment Start **/
    $("#reverse_words_btn").on('click',function () {
        var reverse_words = $("#reverse_words_text").text();
        if(reverse_words){
            var wordArr = reverse_words.trim().split(" ");
            $("#reverse_words_text").text(wordArr.reverse().join(' '));
            $(this).removeClass('btn-primary').addClass('btn-success').text('Thank You!').prop('disabled', true);
        }else {
            alert('Something went wrong, please reload the page and try again');
        }
    });
    /** First Assignment End **/

    /** Second Assignment Start **/
    /** The sort function for the array **/
    function sortFun(a, b) {
        if (parseInt(a) < parseInt(b)) return -1;
        if (parseInt(a) > parseInt(b)) return 1;
        return 0;
    }

    $("#array_m_btn").on('click', function () {
        var arr =[4,12,5,3,6,3]; // These values can be dynamic
        var k= 2; // This value can be dynamic
        var subArray=[];
        var start=0,end=k;
        for(var i =0; i<(arr.length/k);i++){
            subArray.push([arr.slice(start,end).join("")])
            start=start+k;
            end=end+k;
        }
        // The Sub Array
        console.log(subArray);
        var sortedArray=subArray.concat().sort(sortFun);
        // The sorted Array
        console.log(sortedArray);
        var finalArray=[];
        sortedArray.forEach(function(value,index){
            if(value[0].length==k){
                for(var i= 0; i<k;i++){
                    finalArray.push(parseInt(value[0][i]));
                }
            }else{
                var start=0,end=k;
                for(var i =0; i<(arr.length/k);i++){
                    if(arr.slice(start,end).join("")==value[0]){
                        var innerArray=arr.slice(start,end);
                        finalArray=(finalArray.concat(innerArray));
                    }
                    start=start+k;
                    end=end+k;
                }
            }
        });
        // The final expected array
        console.log(finalArray);
    });
    /** Second Assignment End **/

    /** Third Assignment Start **/
    var gameTimer;
    $(document).on("click", "#game_reset_btn", function () {
        var gameStatus = $("#the_game_status").val();
        if(gameStatus == 's'){
            $("#time_remaining").text("The Game is about to start");
            var remainingTime = 10;
            var the_rand = parseInt(randomNumber(20,100));
            $("#lucky_number").text(the_rand);
            $("#game_reset_btn").text('End Game');
            gameTimer = setInterval(function(){
                if(remainingTime <= 0){
                    clearInterval(gameTimer);
                    gameTimer = null;
                    var the_game_score = parseInt($("#the_game_score").val());
                    if(the_game_score == the_rand){
                        alert('THE GAME IS TIED');
                    }
                    else if(the_game_score > the_rand){
                        alert('YOU WON');
                    }else{
                        alert('YOU LOOSE');
                    }
                    $("#the_game_score").val(0);
                    $("#time_remaining").text("Game Over!!");
                    $("#the_game_status").val('s');
                    $("#game_reset_btn").text('Start Again');

                } else {
                    $("#the_game_status").val('e');
                    $("#time_remaining").text(remainingTime + " seconds remaining");
                }
                remainingTime -= 1;
            }, 1000);
        }else{
            clearInterval(gameTimer);
            gameTimer = null;
            $("#the_game_score").val(0);
            $("#the_game_status").val('s');
            $("#game_reset_btn").text('Start Game');
            $("#time_remaining").text("Start Over");
        }

    });
    
    $("#game_score_btn").on('click', function () {
        if(gameTimer){
            var current_score = parseInt($("#the_game_score").val()) + 1;
            $("#the_game_score").val(current_score);
            $("#game_score").text(current_score);
        }
    });

    /** Function to generate random number **/
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }
    /** Third Assignment End **/
});
