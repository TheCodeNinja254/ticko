/**
 * Created by FMMBUGUA on 6/19/2017.
 */
/*
 *
 * This code is written by Joseph Nzioka
 * You may only use APIs inferred to in here with permission from TrioPoint Solutions,
 * otherwise the code is yours if you understand it -:)
 *
 * This code is meant for Ticko System.
 * When I created it this, only God and I understood it, now, only God. Please increment hours wasted for the
 * next lazy developer!
 * TIME WASTED: 12 HRS
 */

$(document).ready(function () {
    getOrganizerDetails();

});

function getOrganizerDetails() {
    $('#org-first-name').empty();
    $('#org-full-name').empty();
    $('#org-profile-pic').attr('src','');
    $('#org_prof_o_username').empty();
    $('#org_prof_fullname').empty();
    $('#org_prof_company_address').empty();
    $('#org_prof_o_phone').empty();
    $('#org_prof_company_name').empty();

    var url = "/ticko/Controllers/getOrganizerDetails/";

    $.ajax({
        type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         : url, // the url where we want to POST // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {

            // log data to the console so we can see
            // console.log(data);

            $(data.data).each(function(key,value){

                if(value.response === true){

                // <li><strong>E-mail: </strong> <span id="org_prof_o_username"></span></li>
                //         <li><strong>Company Address: </strong> <span id="org_prof_company_address"></span></li>
                //         <li><strong>Phone Number: </strong> <span id="org_prof_o_phone"></span></li>

                    $('#org-first-name').html(data.data.o_f_name);
                    $('#org-full-name').html(data.data.o_f_name+" "+data.data.o_l_name);
                    $('#org-profile-pic').attr("src","/ticko/Controllers/uploads/"+data.data.post_image);

                    // For Profile page
                    $('#org_prof_o_username').html(data.data.o_username);
                    $('#org_prof_fullname').html(data.data.o_f_name+" "+data.data.o_l_name);
                    $('#org_prof_company_address').html(data.data.company_address);
                    $('#org_prof_company_name').html(data.data.company_name);
                    $('#org_prof_o_phone').html(data.data.o_phone);
                    $('#org_prof_ppic').attr("src","/ticko/Controllers/uploads/"+data.data.post_image);



                }else{


                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {

        });

}