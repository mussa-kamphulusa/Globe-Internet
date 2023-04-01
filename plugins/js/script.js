/*##########################################################################
  This script does does not contain alot of documentation because the
  code is intuitive and straight forward

--script by code wizardX (@mussajnrkamphulusa@gmail.com / +265 991 868 511)
###########################################################################*/


$(function()
{
    // hides or show submenus
    $("[class*=nav-item]").mouseover(function()
    {
        // Show submenu on when mouse is focused at nav item
        if ($(this).hasClass("dropdown"))
        {
            var submenu = $(this).children("[class*=dropdown-menu]")
            submenu.addClass("show")
            console.log(submenu)
        }
    })


    $("[class*=nav-item").mouseout(function()
    {
        // Hide all submenus when mouse loses focus in any nav item
        $("[class*=dropdown]").removeClass("show")
    })

    // Decorate on mouse focus product name
    $("#products .card").mouseover(function()
    {
        // Underline link text on focus
        var child = $(this).children().children("div").children("h5")
        child.css("text-decoration", "underline")
    })

    $("#products .card").mouseout(function()
    {
        // Remove underline style when mouse loses focus
        var child = $(this).children().children("div").children("h5")
        child.css("text-decoration", "none")
    })

    // Change color of links in footer when mouse hovers over them
    $(".plain").mouseover(function()
    {
        // Add color and underline link text
        $(this).children().css({ 
            color: "rgb(200, 100, 0)",
            textDecoration: "underline",
        })
    })

    $(".plain").mouseout(function()
    {
        // Remove color and underline from link text
        $(this).children().css(
            {
                color: "white",
                textDecoration: "none",
            })
    })

    // Handle coverage city selection
    $("[name=city]").click(function(event) {
        var selected_city = $(this).val()
        $("#coverage_form [list=cities]").val(selected_city)
    })

    /*
    $("#coverage_form").submit(function(event){
        // event.preventDefault()
        // hide_city_search_error()
        validate_city()
    })
    */

    // $("#coverage_modal [class*=btn]").click(function() {
    //     $("#coverage_modal").toggle("slow")
    // })

/*************************************************************************
                 This part contains only of functions
/************************************************************************/

    function confirm_city(city_name) {
        var coverage_cities = ["blantyre", "lilongwe", "zomba", "mzuzu"]
        var supported       = false
        var city_name       = city_name.toLowerCase()

        for (city = 0 ; city < coverage_cities.length ; city++) {
            if (city_name === coverage_cities[city]) {
                supported = true
            }
        }
        return supported
    }


    function validate_city() {
        // hide_city_search_error()

        var city_name = $("#coverage_form [list=cities]").val().trim()
        city_name     = city_name.substring(0, 1).toUpperCase() + 
                        city_name.substring(1).toLowerCase()
        var selection = $("[name=city]:checked").val()
        var modal_text = {
            error: "<p class=\"\">\
                        <strong class='text-danger'>Sorry,</strong> currently \
                        there is no coverage in <strong class='text-danger'>" + 
                        city_name + "\"!</strong>\
                    </p>",
                    
            success: "<p class=\"\">\
                        Coverage in <strong class='text-success'>\"" + city_name + 
                        "\"</strong> is <strong class='text-success'>available!\
                        </strong>\
                    </p>"
                }

        if (city_name === "") {
            console.log("eeny")
            $("#coverage_modal").addClass("show")
            $("#coverage_modal").toggle()
            if (typeof selection != undefined) {
                $("#coverage_modal .modal_body").html(modal_text['success'])
            }
            else {
                console.log("Empty search query")
            }
        }
        else if (city_name !== "") {
            if (!confirm_city(city_name)) {
                $("#no_results").text(modal_text['error'])
                $("#coverage_modal .modal-body").html(modal_text['error'])
                $("#coverage_modal").toggle("slow")
            }
            else if (confirm_city(city_name)) {
                $("#coverage_modal .modal-body").html(modal_text['success'])
                $("#coverage_modal").toggle("slow")
            }
        }
    }
})