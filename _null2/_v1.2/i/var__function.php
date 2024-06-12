<?php
$rell="@11x3";
class site{
	const name = "CocoHairSignature, LLC";
	const address = "2835 Belvidere Road Suite 314, Waukegan Illinois 60085";
	const phone = "+1(224) 440-1819";
	///
	///1=http(s)://oo.o/ 2=http(s)://oo.o/${request_URI} 3=oo.o 
	public static function url($type=1,$crop=false){
		$fhttp=(isset($_SERVER['HTTPS']))?"https:":"http:";
		$serN=$_SERVER["SERVER_NAME"];
		if($type==1){
			return $fhttp."//".$serN.((islive)?"":"/v1.2");
		}elseif($type==2){//full
			return $fhttp."//".$serN.(!isset($crop)?$_SERVER["REQUEST_URI"]:explode("?",$_SERVER["REQUEST_URI"])[0]);
		}elseif($type==3){//domain
			return $serN; 
		}else{return "@@@@--NoUrlOptionSelected--@@@@";exit();}
	}
}

class tools{
	//
	public static function generateRandomAlphanumeric($length) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}

	public static function stripe_Secret_key_API(){
        if(islive){
            return "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";
        }else{
            //test api
            return "sk_test_51PQCudLdOO6FRckBD0JLKloGgUEdqSLtJGJKBFl6EZ6agMVYojX8tP08T0PQU82566c5rY83qKRyMsO2tuXto97j00P9yO9Psi";
        }
    }
    public static function stripe_Signing_Secret(){
        if(islive){
            return "whsec_OmwclZCjkeCy74xpsoxnTBmh11IE8mHt";
        }else{
            //test api
            return "whsec_uCeV3NKg5jTX3jYgHuGQvODcrFfLIGM2";
        }
    }

    public static function stripe_Create_Dynamic_Link_for_payments($cemail,$pprice,$orderID4){
        if(!isset($cemail) || !isset($pprice)){exit("Payment platform error #2896-2407");}
        if(strlen($cemail) < 4 || !filter_var($cemail, FILTER_VALIDATE_EMAIL) || $pprice < 1){exit("Payment platform error #1352-3745");}
        if(strlen($orderID4) < 2 ){exit("Payment platform error #4890-7455");}
        $realpprice=$pprice*100;
        //
        require_once dirr.'/3rdparty/stripe-php-master/init.php';
        //
        \Stripe\Stripe::setApiKey(self::stripe_Secret_key_API());
        //
        // Create a new Checkout Session
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => site::name,
                        ],
                        'unit_amount' => $realpprice, // Amount in cents
                    ],
                    'quantity' => 1,
                ],
            ],
            'payment_intent_data' => [
            'metadata' => [
                'orderID' => $orderID4, // Include order ID in metadata
                'orderEmail'=>$cemail
                ],
            ],
            'mode' => 'payment',
            'success_url' => site::url(1).'/pages/receipt.php?ords='.$orderID4,
            'cancel_url' => site::url(1).'/page1.php',
            'customer_email' => $cemail, // Customer email
            //'customer_phone' => '+1234567890',
        ]);
        return $session->url;
    }
}








$goddses="Bring 7 bags of Jamaican twist hair, 3 bags of fretress deep twist crotchet hair and 3 nail glue. Bring 8 packs of water wave crotchet hair.";
$curls="For curls only, you can bring 2packs of wavy human hair of your choice, I only provide synthetic.";

$haiecollection=array(
    
    "Bora Braids"=>[
        "Bora Braids"=>[
            50=>"(Smedium/Medium) Bring 3 packs of wavy human hair of your choice##<b>Time - 4.5 hours</b><br/>Note that this pic is XS. If you’d like this size, contact me prior to booking.##- $550 mid back##- $850 lower back##- $1200 waist length",
           // 51=>"(Smedium) Bring 3 packs of wavy human hair of your choice##Time - 4.5 hours</b>##- $550 mid back##- $850 lower back##- $1200 waist length"
            
            ]
        ],
    "Knotless Braids"=>[
        "knotless"=>[
          				10=>"(Small)##Time - 3 hours##- $300 mid-back##- $400 lower back##- $600 waist length",
          				7=>"(Smedium)##Time - 3 hours##- $270 mid-back##- $350 lower back##- $450 waist length",
          				49=>"French curls knotless/boxbraids (Smedium)##Time - 3 hours (Bring 3 packs of Fretress French Curl Braiding Hair)##- $300 mid back##- $370 lower back##- $450 waist length",
          				47=>"(Smedium)##Time - 3 hours##- $280 bob/shoulder length",
          				9=>"(Medium)##Time - 3 hours##- $250 mid-back##- $300 lower back##- $400 waist length",
          				5=>"(Large)##Time - 1.5 hours##- $240 mid-back##- 300 lower back##- $350 waist",
          				8=>"(Jumbo)##Time - 2.5 hours##- $260 mid-back##- $300 lower back##- $370 waist length",
          				45=>"(XL) - ".str_replace("2packs","1pack",$curls)."##Time - 1.5 hours##- $240 (with or without curls)",
          			],
        
          			"goddess knotless braids"=>[
          				2=>"(Small) - ".$curls."##Time - 3 hours##- $320 mid-back##- $400 lower back##- $620 waist length",
          				21=>"(Medium) - ".$curls."##Time - 3 hours##- $280 mid-back##- $330 lower back##- $430 waist length "
          			],
          			
          			
          		"boho goddess knotless braids"=>[
          				22=>"- ".$curls."##Time - 3 hours",
          				28=>"(Small) - ".$curls."##Time - 3 hours ($50 extra for fuller curls)##- $350 mid-back##- $450 lower back##- $650 waist length",
          			],
          		"Bob Boho Knotless Braids"=>[ 
          				46=>"(Smedium) - ".$curls."##Time - 3 hours ##- $320 bob/shoulder length", 
          			],
          		"boho goddess knotless braids."=>[ 
          				23=>"(Medium) - ".$curls."##Time - 3 hours ($50 extra for fuller curls)##- $310 mid-back##- $360 lower back##- $460 waist length ",
          			],
          		"Triangle Knotless Braids"=>[
          			4=>"(Small)##Time - 3 hours##- $320 mid-back##- $450 lower back##- $600 waist length",
          			3=>"(Medium)##Time - 3 hours##- $300 mid-back##- $380 lower back##- $450 waist length",
          			],
          		"Triangle Goddess Knotless Braids"=>[
          			32=>"(Small) - ".$curls."##Time - 3 hours##- $320 mid-back##- $420 lower back##- $620 waist length ",
          		],
        
        
          			
        	],
	"BoxBraids"=>[
		"box braids"=>[
  				18=>"(Small)##Time - 3 hours##- $300 mid back##- $400 waist length##- $450 butt length##Ombre",
  				17=>"(Smedium)##Time - 3 hours##- $250 mid back##- $350 waist length##- $380 butt length##Ombre",
  				16=>"(Medium)##Time - 3 hours##- $250 mid back##- $350 waist length##- $380 butt length##Ombre",
  				1=>"(Jumbo)##Time - 2.5 hours##- $235 mid back##- $300 waist length##- $320 butt##Ombre"
  			],
		"Triangle Braids"=>[
  				31=>"(Small)##Time - 3 hours##- $250 mid back##- $350 waist##- $380 butt",
  				15=>"(Smedium)##Time - 3 hours##- $250 mid back##- $350 waist##- $380 butt",
  			],
	],

	"Goddess BoxBraids"=>[
		"Goddess BoxBraids"=>[
				29=>"(Smedium) - ".$curls."##Time - 3 hours##- $265 mid back##- $350 waist##- $380 butt"
			],
  		"boho goddess boxBraids"=>[
  				12=>"(Smedium) - ".$curls."##Time - 3 hours##- $305 mid back##- $360 waist##- $380 butt",
  				13=>"(Medium) - ".$curls."##Time - 3 hours##- $285 mid back##- $330 waist##- $350 butt",
  			],
	],
	
	"Locs"=>[
	    "Indie / Distressed Locs"=>[
  			48=>" (smedium) ##Time - 3 hours (hair not provided)##- $350 mid back##- $450 lower back##- $500 waist length"
  			,],
	    "goddess locs"=>[
  			27=>"(Medium) - ".$goddses."##Time - 3 hours##- $250 mid back##- $280 waist  (Hair Not Included)"
  			,],
  		"Triangle Boho Goddess Locs"=>[
			35=>"(Medium) - ".$goddses."##Time - 3 hours##- $270 mid back##- $300 waist  (Hair Not Included)"],
		"Boho goddess locs"=>[
			26=>"(Medium) - ".$goddses."##Time - 3 hours##- $270 mid back##- $300 waist  (Hair Not Included)"],
	    "butterfly locs"=>[
  				36=>"(Medium) - Bring  6 packs of water wave crotchet hair or 6 packs of Marley hair (depending on the look you want)##Time - 3 hours##- $220 shoulder length##- $260 mid back##- $320 waist (Hair Not Included)",
  				24=>"(Medium) - Bring  6 packs of water wave crotchet hair or 6 packs of Marley hair (depending on the look you want)##Time - 3 hours##- $220 shoulder length##- $260 mid back##- $320 waist (Hair Not Included)"
  				
  			],
  		
  		
  		
	],
	 
	"Crotchet Braids"=>[

  			"Crotchet Braids"=>[
  				30=>"##Time - 1.5 hours (I do not provide hair for any crotchet styles!)##- $150 Regular",
  				33=>"##Time - 1.5 hours (I do not provide hair for any crotchet styles!)##- $150 Regular",
  				34=>"##Time - 1.5 hours (I do not provide hair for any crotchet styles!)##- $150 Regular"
  			],
	],
	"Feedin Braids"=>[
		"Feedin Braids"=>[
  				39=>"##Time - 3 hours##- $280 mid back##- $350 waist"
  			],
		"Feedin Braids With Knotless Braids"=>[
  				37=>"##Time - 3 hours##- $280 mid back##- $360 waist"
  			],
		"Feedin Braids with Knotless Triangle"=>[
  				19=>"##Time - 3 hours##- $250 mid-back##- $300 waist"
  			],
		"Feedin Goddess Braids"=>[
  				20=>"##Time - 3 hours##- $350 mid-back##- $400 waist"
  			],
	],
	
	
	"Passion Twists (not taking appts for these)"=>[
			"Spring Twists"=>[
  				38=>"##Time - 3 hours##- $230 shoulder length##- $260 mid back##- $300 waist (Hair not included)"
  			],
  			"passion twists"=>[
  				25=>"(Medium)##Time - 3 hours##- $220 shoulder length##- $260 mid back##- $320 waist  (Hair Not Included)"
  			],
	],
	
	"Kids Braids (5 - 9yrs)"=>[
		"Kids BoxBraids"=>[
  				6=>"(Smedium/Medium)##Time - 2.5 hours##- $230 mid-back##- $260 waist"
  			],
  		"Kids Goddess BoxBraids"=>[
  				14=>"##Time - 2.5 hours##- $250 mid-back##- $300 waist"
  			],
  		"Triangle Braids"=>[

  				42=>"(Medium)##Time - 2.5 hours##- $175",
  			],
  		"Small Goddess Knotless Braids"=>[
  				43=>"##Time - 2.5 hours##- $250 (with or without curls)"
  			],
  		"Goddess BoxBraids"=>[
  				44=>"(Small)##Time - 2.5 hours##- $250",
  				40=>"(Medium)##Time - 2.5 hours##- $250"
  			],
  		"Knotless Braids"=>[
  				41=>"(Large) - Beads not included##Time - 2 hours##- $180"
  			],
	]
			
  			
  			
);
  			
  			
  			


?>