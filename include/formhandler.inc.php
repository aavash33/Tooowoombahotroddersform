<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $entrantsname1       = $_POST["fullName"];
    $asrfnum           = $_POST["asrfnum"];
    $nofadult           = $_POST["numofadults"];
    $numofchild        = $_POST["numofchild"];
    $ageofchild        = $_POST["aofchild"];
    $postaladd          = $_POST["PostAddress"];
    $homephone          = $_POST["hphone"];
    $mobilephone         = $_POST["mphone"];
    $emailadd             = $_POST["eadd"];
    $rodclubmembership       = $_POST["rcmem"];
    $registrationnum         = $_POST["Rnum"];
    $make                       = $_POST["make"];
    $makeyear                        = $_POST["year"];
    $Bodystyle                    = $_POST["bstyle"];
    $diateryreq                  = $_POST["Diatery"];

    $fulleventregquantity                  = $_POST["fereg"];
    $fulleventregsubtotal                  = $_POST["feregtotal"];
    $showandshineentrantqty                = $_POST["sandsentrant"];
    $showandshineentrantsubtotal           = $_POST["sandsentranttotal"];
    $satlunchqty                           = $_POST["slunch"];
    $satlucnhsubtotal                      = $_POST["slunchtotal"];
    $satnightcateredmealadultsqty          = $_POST["snma"];
    $satnightcateredmealadultsubtotal      = $_POST["snmtotal"];
    $satnightcateredmealchildrenqty        = $_POST["snmc"];
    $satnightcateredmealchildrensubtotal   = $_POST["snmctotal"];
    $highaltituderunpoloshirtsquantity     = $_POST["polos"];
    $highaltituderunpoloshirtssubtotal     = $_POST["polostotal"];
    $poloshirtssmallqty                    = $_POST["polosmall"];
    $poloshirtsmediumqty                   = $_POST["polom"];
    $poloshirtslargeqty                    = $_POST["pololarge"];
    $poloshirtsxlqty                       = $_POST["poloxl"];
    $poloshirtsdoublexlqty                 = $_POST["polo2xl"];
    $poloshirtstriplexlqty                 = $_POST["polo3xl"];
    $onsitecampnumofnightsfor2adultsand2c  = $_POST["nac2"];
    $onsitecampnumofnightsfor2adultsand2ct = $_POST["ac2"];
    $additionalpeoplecampnumofnights       = $_POST["apnon"];
    $additionalpeoplecampersqty            = $_POST["addcampers"];
    $additionalpeoplecampsubtotal          = $_POST["actotal"];
    $entantsname2                          = $_POST["p22e"];
    $signaturedata                         = $_POST["signature"];
    $signaturedate                         = $_POST["date"];
    $totalregfee                           = $_POST["reg2"];
    $totaladditionalmerchandise            = $_POST["ad2"];
    $totalpreorderedmealsnotincludedregfee = $_POST["preomeal"];
    $totalonsitecampfees                   = $_POST["onsitecf"];
    $grandtotaldue                         = $_POST["totalsum"];
    $paymentbychequeormoneyorder           = isset($_POST       
                                             ["chequeormoney"]) ? 1 : 0;
    $confirmregbypost                      = isset($_POST["rpost"]) ? 1 : 0;
    $paymentbydirectdeposit                = isset($_POST
                                              ["directdeposit"]) ? 1 : 0;
    $confirmregbyemail                     = isset($_POST["regemail"]) ? 1 
                                               : 0;
    $officeusedatereceived                 = $_POST["officeuse"];
    $amountdeposited                       = $_POST["totalamt"];
    $chequemoneyorderno                    = $_POST["chequemoneyno"];
    $directdepositorreference              = $_POST["directdeponum"];


















    if (empty($signaturedata)) {
        die("Signature data is empty.");
    }

    // If the signature data starts with 'data:image/png;base64,' remove that prefix
    if (strpos($signaturedata, 'data:image/png;base64,') === 0) {
        $signaturedata = substr($signaturedata, strlen('data:image/png;base64,'));
    }

    try {
       require_once "dbh.inc.php";
        $query = "INSERT INTO altituderunform (
        entrantsname1,
         asrfnum, 
         no_of_adult ,
          no_of_children ,
           ages_of_children ,
            postal_address ,
             home_phone,
              mobile_phone, 
              email_address,
               rod_club_membership,
                registrationnumber, 
                make,
                 makeyear,
                  bodystyle,
                   diatery_requirements, 
                   full_event_registration_quantity, full_event_registration_subtotal, show_and_shine_entrant_quantity, show_and_shine_entrant_subtotal, 
                   saturday_lunch_quantity,
                    saturday_lunch_subtotal, saturday_night_catered_meal_adults_quantity, saturday_night_catered_meal_adults_subtotal, saturday_night_catered_meal_children_quantity, saturday_night_catered_meal_children_subtotal, high_altitude_run_polo_shirts_quantity, high_altitude_run_polo_shirts_sub_total, polo_shirt_small_quantity, 
                    polo_shirt_medium_quantity,
                     polo_shirt_large_quantity,
                      polo_shirt_xl_quantity, polo_shirt_doublexl_quantity,  polo_shirt_triplexl_quantity, onsite_camping_num_of_nights_for_two_adults_and_two_children, onsite_camping_for_two_adults_and_two_children_sub_total,  
                      no_of_nights_additional_people_camping_at_site, additional_campers_quantity, additional_campers_onsite_subtotal, 
                      entrantsname2, 
                      signaturedata, 
                      signature_date, 
                      total_registration_fee, 
                      total_additional_merchandise, total_of_pre_ordered_meals_not_included_in_registration_fee, 
                      total_onsite_camping_fees,
                      grand_total_due, 
                      payment_by_cheque_or_money_order, confirm_registration_by_post, payment_by_direct_deposit, confirm_registration_by_email, office_use_date_received, 
                      amount_deposited,
                       cheque_money_order_no, 
                       direct_deposit_or_reference ) VALUES (?, 
                       ?,
                        ?,
                         ?,
                          ?,
                           ?,
                            ?,
                             ?,
                              ?,
                               ?,
                                ?,
                                 ?,
                                  ?,
                                   ?,
                                    ?,
                                     ?,
                                      ?,
                                       ?,
                                        ?,
                                         ?,
                                          ?,
                                           ?,
                                            ?,
                                             ?,
                                              ?,
                                               ?,
                                                ?,
                                                 ?,
                                                  ?,
                                                   ?,
                                                    ?,
                                                     ?,
                                                      ?,
                                                       ?,
                                                        ?,
                                                         ?,
                                                          ?,
                                                           ?,
                                                            ?,
                                                             ?,
                                                              ?,
                                                               ?,
                                                                ?,
                                                                 ?,
                                                                  ?,
                                                                   ?,
                                                                    ?,
                                                                     ?,
                                                                      ?,
                                                                       ?,
                                                                        ?,
                                                                         ?,
                                                                          ?,
                                                                           ? )";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$entrantsname1,     
        $asrfnum,           
        $nofadult,          
        $numofchild,        
        $ageofchild,        
        $postaladd,         
        $homephone,        
        $mobilephone,       
        $emailadd,          
        $rodclubmembership, 
        $registrationnum,   
        $make,              
        $makeyear,              
        $Bodystyle,         
        $diateryreq,
        $fulleventregquantity,                  
        $fulleventregsubtotal, 
        $showandshineentrantqty,                  
        $showandshineentrantsubtotal,           
        $satlunchqty,                          
        $satlucnhsubtotal,                     
        $satnightcateredmealadultsqty,          
        $satnightcateredmealadultsubtotal,      
        $satnightcateredmealchildrenqty,        
        $satnightcateredmealchildrensubtotal,   
        $highaltituderunpoloshirtsquantity,     
        $highaltituderunpoloshirtssubtotal,   
        $poloshirtssmallqty,                  
        $poloshirtsmediumqty,                   
        $poloshirtslargeqty,                    
        $poloshirtsxlqty,                     
        $poloshirtsdoublexlqty,                 
        $poloshirtstriplexlqty,                
        $onsitecampnumofnightsfor2adultsand2c,  
        $onsitecampnumofnightsfor2adultsand2ct,
        $additionalpeoplecampnumofnights,       
        $additionalpeoplecampersqty,          
        $additionalpeoplecampsubtotal,          
        $entantsname2,                          
        $signaturedata,                         
        $signaturedate,                         
        $totalregfee,                           
        $totaladditionalmerchandise,            
        $totalpreorderedmealsnotincludedregfee, 
        $totalonsitecampfees,                   
        $grandtotaldue,                         
        $paymentbychequeormoneyorder,           
        $confirmregbypost,                      
        $paymentbydirectdeposit,                
        $confirmregbyemail,                     
        $officeusedatereceived,                 
        $amountdeposited,                       
        $chequemoneyorderno,                    
        $directdepositorreference 
    
    
    ]);

        $pdo = null;
        $stmt = null;
         die();
         header("Location: ./index.php");
    } catch (PDOException $e) {
        die("Query Failed" . $e->getMessage());
    
    }
}

else{
    header("Location: ./index.php");
}