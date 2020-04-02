@extends('layouts.master')

@section('style')

<style type="text/css">
  .all_sports{
    background-color: #0a2940;
  }
  .text_color{
    color: #ffffff;
  }
  .all_span{
    color:#EAF607;
  }
  .nav-tabs {
    border-bottom: 0px solid #ddd !important;
  }

  .nav-tabs>li>a {
    color: #fff;
  }
  .nav-tabs>li>a:hover {
    color: #105711;
  }
  .headline{
    background-color: #4987B8;
    color: #ffffff;
    padding-top:10px;
    padding-bottom: 10px;
    margin-top: 20px;
  }
  .table_content{
    background-color: #4987B8;
  }
  /*col-md-4*/
  .ash {
   color: #CEC7B9;
   font-size: 20px;
 }
 .team_name{
  background-color: #fff;
  color: #4987B8;
  font-size: 20px;
  font-weight: 800;
}
/*sport table start*/
.back_style{

  border-left: 2px solid #005580;
  border-top: 1px solid #005580;
  border-bottom: 1px solid #005580;
  background-color: #ffffff;
  text-align: center;
}
.back_style:hover{
  background-color: #3896DF;
  /*border-radius: 25px;*/
}
.sport-table{
  margin-bottom: 65px;
}

/*counter in modal*/

.stepper-sport .stepper input[type="number"] {
  width: 60px;
  max-width: 60px;
  min-height: 60px;
  padding: 0 5px;
  margin-left: auto;
  margin-right: auto;
  line-height: 60px;
  text-align: center;
  -moz-appearance: textfield;
  font-family: "Kanit", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-size: 24px;
  font-weight: 400;
  color: #151515;
  background-color: #edeff4;
  border: 0;
}

.form-input {
  display: block;
  width: 100%;
  min-height: 60px;
  padding: 17px 19px;
  font-size: 14px;
  font-weight: 400;
  line-height: 24px;
  color: #9b9b9b;
  background-color: #fff;
  background-image: none;
  border-radius: 3px;
  -webkit-appearance: none;
  transition: .3s ease-in-out;
  border: 1px solid #e1e1e1;
}
.modal-sport-place{
  margin-right: 220px;
  padding: 11px;
  text-transform: uppercase;
  font-size: 20px;
  font-weight: 600;
  color: #fff;
}
.modal-footer>a:hover{
  text-decoration: none;
    color: #fff;
}

.modal-footer {
  background-color: #3EA2E0;
}
/*counter in model end*/
/*sport table end*/


/*left side css end*/

/*right*/
.co{

  margin-top: 59px;
  margin-left: -9px;
}
.highlight{
  background-color: #4987B8;
  text-align: center;
  font-size: 25px;
  font-weight: 700;
  margin-top: 15px;       
  border-radius: 20px;
}
.description{
  font-size: 14px;
  color: #8F948D;
}
.highlight_list{
  margin-bottom: 25px;
}
.live_score{
  background-color: #4987B8;
  text-align: center;
  font-size: 25px;
  font-weight: 700;
  margin-top: 30px;       
  border-radius: 20px;
}
.game-result-cust {
  color: #fff;
}
.game-info-main {
 display: inline-flex;
 flex-direction: row;
 flex-wrap: nowrap;
 align-items: center;
 justify-content: space-between;
 min-width: 100%;
 max-width: 100%;
 margin-top: 0;
 margin-bottom: 1px;
 padding: 5px;
}
.game-info-team{
  border: 1px solid #7dd888;
  padding: 9px 9px 9px 0px;
  border-radius: 25px;
  width:199px;
  margin: 10px;
}
.change-color{
  color: #ffffff;
}
.left{
  margin-left: 10px;
}
.right{
  margin-right: 10px;
}

/*footer*/
.ssc-srg{
  margin-top: 50px;
  margin-bottom: 50px;
}
.first_part{
  background-color: #383838;
  color: #fff;
}
</style>

@endsection
@section('content')
{{-- {{ dd($matches) }} --}}
<section class="all_sports">
  <div class="container">
   <ul class="nav nav-tabs" style="background-color: #1A5685;">
    <li class="active text_color"><a data-toggle="tab" href="#home" charset=><img src="img/cricket.png"><br>Cricket</a></li>
    <li><a data-toggle="tab" href="#menu1"><img src="img/soccer-1.png"><br>Football</a></li>
    <li><a data-toggle="tab" href="#menu2"><img src="img/basketball-1.png"><br>Basket</a></li>
    <li><a data-toggle="tab" href="#menu3"><img src="img/volleyball.png"><br>Volley</a></li>
    <li><a data-toggle="tab" href="#menu4"><img src="img/tennis.png"><br>Tennis</a></li>
  </ul>

  <div class="tab-content">
    <!-- cricket -->
    <div id="home" class="tab-pane fade in active">
      <div class="row">
        <!-- <div class="col-md-9">
          <div class="headline">
            <h4><CENTER>CRICKET</CENTER></h4>
          </div> 
          <div class="table_content">
            @foreach($matches as $match)
            <div class="mb-5">
              <div class="team_name">
                <a id="match_name_team-1" style="margin-left: 25px; margin-top: 7px;">{{ $match->team1 }}</a>
                <a style="font-size: 20px;">vs</a>
                <a id="match_name_team-2">{{ $match->team2 }}</a>
                {{-- <a>A VS B</a> --}}
                <p id="pubdate" style="margin-top: 15px;margin-left: 25px;font-size: 15px;margin-bottom: 7px;">{{ Carbon\Carbon::parse($match->match_time)->diffForHumans()  }}</p>                                  
              </div>                          
              <div class="beat_details">
                @foreach($match->betsForMatch as $option)
                <div class="sport-table">
                  <h4 class="all_span"> {{ $option->betOption->name }}</h4>
                  <div class="row">
                    @foreach($option->betDetails as $details)

                    <div class="col-md-6 back_style m-5">
                     <a href="#" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-match-name="ban vs afg">
                       <span style="color: #000000;">{{ $details->name }}</span>
                       <br>
                       <span style="color: #000000;">{{ $details->value }}</span>
                     </a>
                     <!-- modal start -->
                    <!-- <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <!-- <div class="modal-content">
                          <div class="modal-header" style="background-color: #2A2A2A;">
                            <button type="button" class="close" data-dismiss="modal" style="color: #fcf8e3;font-size: 30px;">&times;</button>
                            <h4 class="modal-title" style="color: #ffffff;">PlACE A BET</h4>
                          </div>
                          <div class="modal-body" id="title">
                            <p>Some text in the modal.</p>
                          </div> -->
                                                   <!-- counter -->
                          <!-- <div class="stepper-sport">
                           <div class="stepper ">
                            <input class="form-input" type="number" data-zeros="true" value="20" min="20" max="6000">
                            <span class="stepper-arrow up">+</span>
                            <span class="stepper-arrow down">-</span>
                          </div>
                        </div>
                        <span style="color: red;" class="message2" id="message2">Limit (20 - 6000)</span>
                        <div class="modal-footer">
                          <p class="modal-sport-win">
                            <span class="modal-sport-win-left">Possible Return</span>
                            <span class="bet_possible_win">51</span>
                          </p>
                          <button class="modal-sport-place button button-primary button-block" type="submit">place bet</button>  
                        </div>
                      </div>

                    </div>
                    </div> -->
                     <!-- modal end -->
                   <!-- </div>
                   @if($loop->iteration % 2 == 0)
                  </div>
                 <div class="row">
                   @endif
                   @endforeach
                    {{-- end of row --}}
                 </div>
                @endforeach
                </div>
              </div>
               @endforeach
            </div>                        

           </div>
        </div> --> 
        <div class="col-md-9">
                          <div class="headline">
                              <h4><CENTER>CRICKET</CENTER></h4>
                          </div> 
                          @foreach($matches as $match)
                          <div class="table_content" style="margin-top: 20px">
                            <div class="team_name">
                              <a id="match_name_team-1" style="margin-left: 25px; margin-top: 7px;">{{ $match->team1 }}</a>
                              <a style="font-size: 20px;">vs</a>
                              <a id="match_name_team-2">{{ $match->team2 }}</a>
                              {{-- <a>A VS B</a> --}}
                              <p id="pubdate" style="margin-top: 15px;margin-left: 25px;font-size: 15px;margin-bottom: 7px;">{{ Carbon\Carbon::parse($match->match_time)->diffForHumans()}}</p>                                  
                            </div>                              
                            <div class="beat_details">
                              @foreach($match->betsForMatch as $option)
                              <div class="sport-table">
                                  <h4 class="all_span" style="margin-left: 20px;">{{ $option->betOption->name }}</h4>
                                  @foreach($option->betDetails as $details)
                                     <div class="col-md-4 back_style">
                                         <a href="#" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-match-name="ban vs afg">
                                             <span style="color: #000000;">{{ $details->name }}</span>
                                             <br>
                                             <span style="color: #000000;">{{ $details->value }}</span>
                                         </a>
                                         
                                     </div>
                                     @endforeach
                              </div>
                              @endforeach
                            </div>
                            
                          </div>                        
                          @endforeach  
                      </div>
      <div class="col-md-3">
        <div class="uppersection">
          <div class="highlight">
            <span style="color: #ffff;">Advance</span>
            <div id="list">

            </div>
          </div>
          <!-- Live score start -->

          <div class="live_score" style="margin-top: 50px; margin-bottom: 50px;">
            <h2 style="color: #ffff;">Live Score</h2>
            <h3 style="font-size: 20px;color: #F4FF05;">Cricket International</h3>
            <article class="game-result-cust"style="font-size: 12px;">
              <div class="game-info-main">
                <div class="game-info-team" id="score-team-1">
                  <span></span>
                </div>
                <div class="game-info-middle"><span>VS</span></div>
                <div class="game-info-team" id="score-team-2">
                  <span></span>
                </div>
              </div>

            </article>

          </div>
        </div>
      </div>   
      </div>
    </div>
  
    <!-- football -->
    <div id="menu1" class="tab-pane fade">
      <div class="row">
        
     </div>
    </div>
     <div id="menu2" class="tab-pane fade">
        <div class="row">
                          
        </div>
     </div>
     <div id="menu3" class="tab-pane fade">
        <div class="row">
                                          
        </div>
    </div>
    <div id="menu4" class="tab-pane fade">
        <div class="row">
                                          
        </div>               
    </div>
  </div>  
 </div> 
 <!-- modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">                                       
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #3EA2E0;">
              <button type="button" class="close" data-dismiss="modal" style="color: #fcf8e3;font-size: 30px;">&times;</button>
              <h4 class="modal-title" style="color: #ffffff;text-align: center;">PlACE A BET</h4>
            </div>
            <div class="modal-body" style="text-align: center;
    font-size: 20px;" id="title" >
              
            </div>

             <!-- counter -->
            <div class="stepper-sport" style="height: 120px">
               <div class="stepper ">
                <div class="col-md-6">
                  <p style="font-size: 20px;">1st over run of 1st innings</p>
                  <p style="margin-left: 35px;">1-3 run</p>
                  <p style="margin-left: 35px;">1.5</p>
                </div>
                <div class="col-md-6">
                  <input class="form-input" type="number" data-zeros="true" value="20" min="20" max="6000">
                  <span style="color: red;margin-left: 85px;" class="message2" id="message2">Limit (20 - 6000)</span>
                </div>
                <p class="modal-sport-win">
                <span style="margin-left: 65px;
    font-size: 20px;">Possible Return</span>
                <span style="margin-left: 15px;
    font-size: 20px;">51</span>
                </p> 
               </div>
            </div>
            <!-- <span style="color: red;" class="message2" id="message2">Limit (20 - 6000)</span> -->
            <div class="modal-footer">
                <!-- <p class="modal-sport-win">
                <span class="modal-sport-win-left">Possible Return</span>
                <span class="bet_possible_win">51</span>
                </p> -->
                <!-- <button class="modal-sport-place button button-primary button-block" type="submit">place bet</button>  --> 
                <a href="#" class="modal-sport-place">Place Bet</a>
            </div>
          </div>
                                              
        </div>
      </div>
<!-- modal end --> 

 </section> 
  @endsection

            @section('script')
              {{-- <script type="text/javascript">
                $(document).ready(function(){
                  $.getJSON("https://cricapi.com/api/cricketScore?apikey=LBzdU0fOobcyE2aBt6Qi3492bJQ2&unique_id=1034809",function(data){
                    var match_data_team_1 = '';
                    var match_data_team_2 = '';
                    var pubdate = '';
                    console.log(data["provider"]["pubDate"])

                    match_data_team_1 += "<span>"+data["team-1"]+"</span>"
                    match_data_team_2 += "<span>"+data["team-2"]+"</span>"
                    pubdate += "<span>"+data["provider"]["pubDate"]+"</span>"
                    $('#match_name_team-1').append(match_data_team_1);
                    $('#match_name_team-2').append(match_data_team_2);
                    $('#test-1').append(match_data_team_1);
                    $('#pubdate').append(pubdate);

                    /*live score*/
                    $('#score-team-1').append(match_data_team_1);
                    $('#score-team-2').append(match_data_team_2);
                  });

                  $(document).on("click","#trigger-modal",function(e){

                    $("#title").text($(this).data("match-name"));
                  });

                });

                /*advance*/
                $(document).ready(function(){
                  $.getJSON("https://cricapi.com/api/matchCalendar?apikey=LBzdU0fOobcyE2aBt6Qi3492bJQ2",function(data){
                    var match_name = '';
                    var match_date = '';
                    for(var i=0; i<5; i++){
                      console.log(data["data"][i])
                      match_name += " <ul class='highlight_list'><li style='list-style-type: none; margin-top: 10px;'><p class='highlight_title'><span style='margin-left: -35px;font-size: 15px;color: #EAF607;'>"+data["data"][i]["name"]+"</span><a href='#' style='color: #F4FF05; font-size: 18px;'></a></p><p class='description'>"+data["data"][i]["date"]+"</p></li></ul>";
                    }
                    $("#list").append(match_name);
                  });
                });
              </script> --}}
              <script type="text/javascript">
                $(document).on("click","#trigger-modal",function(e){
                  $("#title").text($(this).data("match-name"))
                });
              </script>

              @endsection
