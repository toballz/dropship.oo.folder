<?php include_once("./co.php");


?><!DOCTYPE html>
<html>
<head>
    <?php include_once("i/var__function.php");?>
    
  <?php include(dirr."./i/head.php");?>
  
  <style type="text/css">.btn{margin:0 !important;}.jkwj4n5{display:flex;padding:12px 2px;}.jkwj4n5-1{width:304px;}.jkwj4n5-2{width:100%;padding:13px;}.jkwj4n5-2 input[type="radio"]{margin:1px 9px 0 0;-webkit-transform:scale(1.5);transform: scale(1.5)}.jkwj4n5-2 label{cursor:pointer;}
    @media(max-width:489px){.jkwj4n5{display:block;}.jkwj4n5-1,.jkwj4n5-2{width:100%;}}
    </style>
  <title>Set Appointment | CocoHairSignature</title>
   
  <link rel="stylesheet" href="<?php echo site::url(1);?>/assets/web/assets/mobirise-icons/mobirise-icons.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo site::url(1);?>/datepicker4/css/pignose.calendar.min.css"/>
  
</head>
<body>
<?php include("i/header.php");?>
<section data-bs-version="5.1" class="content5 cid-sRCtHKvscz" id="content5-q">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                    <strong>POLICY</strong></h3>
                <p class="mbr-text mbr-fonts-style display-7">Hi!<br>Please read all guidelines prior to booking your appointment.<br>I’m located in Grayslake, Illinois. Address will be sent after deposit is paid.<br><li>When booking appointment all of your contact information must be valid. DO NOT BOOK UNDER NICKNAME! </li><li>If you think you might be sick, or displaying any cold or covid symptoms, we ask that you reschedule your appointment. We take our health and covid mandate policies very serious. This applies to also those that are vaccinated.</li> <b>A NON-REFUNDABLE DEPOSIT of $50 is REQUIRED FOR ALL STYLES.</b> Deposit will be deducted from your service fee. $50 deposite is required to reschedule your appointment if cancellations occur. Hair is included for all Braidstyles. I do not provide hair for any crotchet styles, locs or twist styles. Colors offered are 1,1b,1/27,1/30,2,4,27,30. Other colors are offered upon request or you can bring your own pre-stretched hair. I recommend Xpressions, Fretress, Formation and Ruwa.<br><li>Hair must be at LEAST 3 inches. If your hair is shorter than 3 inches, please schedule a consultation by texting me. NO EXTRA PEOPLE! ONLY THOSE BEING SERVICED. Unless you are accompanying a minor.<br>YOU CANNOT schedule for a certain style and then change it at the appointment.</li></p> 

                 <li class="mbr-text mbr-fonts-style display-4" style="padding-left:14px;">Once your appointment is booked, I will contact you within a few days before your appt date (typically a week) to inquire about color choice and your desired length. Please note after picking your color, no modifications are allowed.<br></li>
                 <li class="mbr-text mbr-fonts-style display-4" style="padding-left:14px;">I can only accomodate two colors per style at this time. However, if you would like to get three colors or more it will be an additional $15. After 3 days of being serviced, I am no longer responsible for any misfortunes. Clients are responsible for the upkeep and maintenance of their hair.<br></li>

                 <p class="mbr-text mbr-fonts-style display-7">Make sure your hair is free of texturized sores. If you have any sores or open wounds on your scalp <b>YOU WILL NOT BE SERVICED!</b><br><li>If you are unsure about edges, undercut, soft hair, etc, please email me at <a target="_blank" href="mailto:cocohairsignature@gmail.com"><b>cocohairsignature@gmail.com</b></a> regarding a consulting to ensure that you receive the best services for your hair. My consultations are free and typically take no less than 15 minutes.</li><br><li>Have a blunt/pixie cut? No problem. I will try my best to hide your ends using my skill and products. But keep in mind that style may not come out as neat.<br><strong>PLEASE COME CHEMICAL/OIL FREE, WASHED, BLOW DRIED AND DETANGLED. IF YOUR HAIR HAS TO BE BLOW DRIED AND DETANGLED THERE WILL BE A $25 SURCHARGE.</strong><br><b>HERE IS THE PERFECT EXAMPLE OF HOW YOUR HAIR SHOULD BE BLOWN OUT FOR YOUR APPOINTMENT.</b><div style="width:100%;max-width:234px;"><img src="<?php echo site::url(1);?>/img/ettj.png"></div><br><li>CASH IS DUE WHEN PAYING THE REMAINDER BALANCE. </strong>You’ll have 10 minutes grace period. After 10 minutes you will be charged a $35 late fee. After 20 minutes your appointment will be considered a NO SHOW.<br></li><li>You must cancel 24 hours in advance or you’ll be charged 75% of service fee.<br>NO SHOW appointments are charged 100% and you can no longer book anymore IF YOU REFUSE TO PAY FOR SERVICES.</li><li><u>Emergency / Squeeze In / Day off Appointment:</u> $150 and up depending on hairstyle. Please note that this is an additional fee.</li><li>PLEASE COME WITH A GOOD ATTITUDE.😊</li></p>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content16 cid-sRCsYRm1MV" id="content16-p">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11">
                <div class="mbr-section-head align-center mb-4">
                    <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2">
                        <strong>Categories</strong></h3>
                    
                </div>
                <div id="bootstrap-accordion_1" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    
                    <?php $i=0;foreach($haiecollection as $ca=>$cate2){$i++;?>
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_<?php echo $i;?>" aria-expanded="false" aria-controls="collapse1">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong><?php echo $ca;?></strong>
                                </h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse1_<?php echo $i;?>" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_1">
                            <div class="panel-body">
                                <div class="mbr-fonts-style panel-text display-4"><?php foreach($cate2 as $g=>$hi){foreach ($hi as $img => $h){echo "<div class='jkwj4n5'><div class='jkwj4n5-1'><img src='".site::url(1)."/img/".$img.".jpg?93jv'/></div><div class='jkwj4n5-2'><div  style='margin-bottom:12px'><span style='font-size:34px;font-weight:600;text-transform:capitalize;'>".$g."</span><span>".explode("##",$h)[0]."</span></div>";$z=0;
                                    foreach(explode("##",$h) as $hg){if($z!=0){echo "<div><label>".(($z!=1)?"<input type='radio' data-hair='".$img."#".$z."' name='n7q5'/>":"").$hg."</label></div>";}$z++;}
                                echo "</div></div>";}}?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                    <div><br><br>
                        <div style="padding-left:24px"><b>Monday - Saturday</b> (08:00AM - 07:00PM)<br/></div>
                        <br><br>
                        <button style="width:100%;padding:18px 0;" class="btn btn-secondary continyeto_pickadate" >Select date</button></div>
                     
                    
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("i/footer.php");?>
<style>

.pignose-calendar {
            font-family: 'Lato', 'Open Sans', sans-serif;
            font-size: 14px !important;max-width:100% !important;width:100%;
            } 
            .time_sel_xewqctorbox { text-align: center; max-width: 100% !important; font-weight: 600; padding:20px 1.6em 0; background-color: #fafafa;
                  border: 1px solid #d8d8d8; box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
                  -o-box-shadow: 0 4px 12px rgba(0, 0, 0, .25); -moz-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
                  -webkit-box-shadow: 0 4px 12px rgba(0, 0, 0, .25); overflow: hidden;
            }

            .time_sel_xewqctorbox>ul{display:block;padding:0;margin:25px 0 0;; max-height:372px; overflow-y: scroll;}
            .time_sel_xewqctorbox>ul>li{width:95%;list-style-type: none;}
            .time_sel_xewqctorbox>ul>li>label{width:100%;}
            .time_sel_xewqctorbox>ul>li>label>div{width:100%;margin:4px 2px;cursor:pointer;padding:12px;box-shadow:2px 2px 4px rgb(0 0 0 / 51%)}
            .time_sel_xewqctorbox>ul>li>label>input.selector_timer_checked{display:none;}
            .time_sel_xewqctorbox>ul>li>label>input.selector_timer_checked:checked+div{background:#94db94;color:#700d0d;}
      




    .pickerdateClassModal_parent{display:none; 
    width: 100%; height: 100%;
    position: fixed;background:rgb(0 0 0 / 69%); top: 0;z-index: 6246;
    left: 0; justify-content: center; align-items: center;}
    .pickerdateClassModal{ width:100%;padding:23px;max-width:800px;display:flex; display: flex; justify-content: center;}
    .pickerdateClassModal>div:first-child{ width: 65%; }
    .pickerdateClassModal>div:last-child{ width: 45%; }

    
    .contact_cutstomer_vbg{z-index:123123;display:flex;justify-content:center;align-items:center;position:fixed;top:0;width:100%;left:0;height:100%;background:rgb(0 0 0 / 74%);}
    .contact_cutstomer_vbg>div{padding:15px;max-width:580px;width:100%;background:#fff;}
    .contact_cutstomer_vbg>div h2{text-align:center;}
    .contact_cutstomer_vbg>div>label{width:100%;padding:14px;display:block;font-size:15px}
    .contact_cutstomer_vbg>div>label>input{width:100%;padding:15px;}
    .contact_cutstomer_vbg>div>label>p{margin:2px 0 4px;font-weight:600;}


</style>




<div class="pickerdateClassModal_parent">
    <div class="pickerdateClassModal">
        <div class="agddhahah"></div>
        <div class="time_sel_xewqctorbox"></div>
    </div>
 </div> 

  
<script type="text/javascript" src="<?php echo site::url(1);?>/datepicker4/js/pignose.calendar.full.min.js"></script>
<script type="text/javascript">

   var dateselected_fromDates=null,hairstyle=null,ttimeesele=null,dateSelecta=null;
function convertTimeTo12HourFormat(time) {
  var hour = parseInt(time.substring(0, 2));
  var minute = time.substring(2);
  var period = (hour >= 12) ? "pm" : "am";

  // Convert hour to 12-hour format
  hour = (hour > 12) ? (hour - 12) : hour;
  
  // Handle hour = 0 (midnight) and hour = 12 (noon)
  if (hour === 0) {
    hour = 12;
  }

  // Pad minute with leading zero if necessary
  if (minute.length === 1) {
    minute = "0" + minute;
  }

  return hour + ":" + minute + " " + period;
}

function getTimeSlot(timwssawaewses){
    $.post("<?php echo site::url(1);?>/i/api.php",{
                select_time_forDate:0,
                getDate4Thd:timwssawaewses,
                v:1
            },function(dataTimes){ 
            dateSelecta=timwssawaewses;
                var timeAvailableList="";
                if (Object.keys(dataTimes).length === 0) {
                    timeAvailableList='<li>No timeslot available</li>';
                } else {
                    for(var o in dataTimes){
                        if (dataTimes.hasOwnProperty(o)) {
                            timeAvailableList += "<li><label><input type='radio' value='"+dataTimes[o]+"' name='selector_timer' class='selector_timer_checked'/><div>"+convertTimeTo12HourFormat(dataTimes[o])+"</div></label></li>"; 
                        }
                    }
                }
                var $targetClass = $(".time_sel_xewqctorbox");
                  $targetClass.css("display","block");
                  $target=$targetClass.html(`<div>Select A Time for<br/>${timwssawaewses.substring(0, 4)+"-"+timwssawaewses.substring(4, 6)+"-"+timwssawaewses.substring(6, 8)}</div> 
                           <ul> 
                              ${timeAvailableList} 
                           </ul>
                           </br>
                           <div style="width:100%;" class="btn btn-secondary" onclick="continuetoinfo();">Proceed to Check out!</div>
                           `)
            }); 
}

var today = new Date();
var year = today.getFullYear();
var month = (today.getMonth() + 1), day = today.getDate(); 
var ttodayDatew=year + '' + ((month<10)?('0' + month):month) + '' + ((day < 10)? ('0' + day):day);
 
getTimeSlot(ttodayDatew);


    $('.agddhahah').pignoseCalendar({
      disabledRanges: [ ['2020-01-12', ttodayDatew.substring(0, 4)+"-"+ttodayDatew.substring(4, 6)+"-"+(parseInt(ttodayDatew)-1).toString().substring(6, 8)]  ],
      //disabledDates: [ '2024-05-07', '2024-05-06' ],   
      //disabledWeekdays: [0, 6],
	scheduleOptions: {
		colors: {
		    offer: '#2fabb7',
			ad: '#5c6270'
		}
	},
	schedules: [{
		name: 'offer',
	    date: '2024-05-09'
	}, {
		name: 'ad',
	    date: '2024-05-10'
	} ],
	select: function(date, context) {
        dateselected_fromDates=(date[0] === null ? 'null' : date[0].format('YYYYMMDD'));
        if(dateselected_fromDates !== "null"){
            getTimeSlot(dateselected_fromDates);
        }else{ 
            var $targetClass = $(".time_sel_xewqctorbox"); $targetClass.css("display","block");
            $target=$targetClass.html(` <ul> <li>No date selected!</li> </ul>`)
        }
	}
});


</script>   
<script type="text/javascript">
    
function formatPhoneNumber(input) {
    let formattedValue = input.value.replace(/\D/g, '');
    formattedValue = formattedValue.replace(/^(\d{3})(\d{3})(\d{4})$/, '($1) $2-$3');
    input.value = formattedValue;
}
    document.querySelector(".continyeto_pickadate").onclick = function(){
        var t=0, rados = document.querySelectorAll('[data-hair]');
        
        for(var i = 0; i < rados.length; i++) {
            if(rados[i].type === 'radio' && rados[i].checked) {
            $.post("<?php echo site::url(1);?>/i/api.php",{
                    selectdatetime:0,
                    v:1
                },function(){
                    $(".pickerdateClassModal_parent").css("display","flex");
                    hairstyle=rados[i].getAttribute("data-hair");
                }); 
                t=1;break;return;
            }
        
        }
        if(t==0){alert("Please Select a HairStyle From the Collection.");};
}

 
function continuetoinfo(){
        var j=0, radosq = document.querySelectorAll('input[name="selector_timer"].selector_timer_checked');
        
        for(var i = 0; i < radosq.length; i++) {
            if(radosq[i].type === 'radio' && radosq[i].checked){
                ttimeesele=radosq[i].value; 
                $("body").append(`<div class="contact_cutstomer_vbg">
                    <div></br><h2>Your contact Info</h2></br>
                        <label><p>FullName</p><input type="text" name="fullname" placeholder="Fullname"/></label>
                        <label><p>Email</p><input type="email" name="email" placeholder="Email"/></label>
                        <label><p>Phone Number</p><input type="text" name="phonenumber" placeholder="Phone Number" maxlength="15" oninput="formatPhoneNumber(this);"/></label>
                        <label><input class="btn btn-secondary" type="button" name="submit" value="Proceed to payment" onclick="saveContactInfo();"/></label>
                        </br></br></div>
                </div>`);
                j=1;break;return;
            }

        
        }
        if(j==0){alert("Please Select a time slot for this date.");}
 
}

function saveContactInfo(){
    var fnm=$('[name="fullname"]'),  eml=$('[name="email"]'), pnb=$('[name="phonenumber"]'),err=false;

    if (fnm.val().indexOf(' ') !== -1) {  } else {err="Please type your First and Last name!"; }
    if (eml.val().indexOf('@') !== -1) {  } else {err="Please Input a valid Email!"; } 
    if (/^\(\d{3}\) \d{3}-\d{4}$/.test(pnb.val())) { 
        console.log("Valid phone number");
    } else {err="Please Input a valid Phone number!"; }

    if(err){
        alert(err);
    }else{
        if(dateSelecta !== null && ttimeesele !== null && hairstyle !== null){
            var gg={
                fullname: fnm.val(),
                email: eml.val(),
                phone: pnb.val(),
                time: ttimeesele,
                date:dateSelecta
            };

            $.post("<?php echo site::url(1);?>/i/api.php",{
                save_contacts_64e:"err",
                        co: JSON.stringify(gg),
                    ord:hairstyle,
                    v:1
                },function(){
                    $(".pickerdateClassModal_parent").css("display","flex");
                }); 
        }else{
            alert("Error please reload this page.");
        }
    }
}
</script>
<!--<script src="assets/theme/js/script.js"></script>  -->
  
  
</body>
</html>