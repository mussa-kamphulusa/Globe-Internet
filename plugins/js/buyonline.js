/*##########################################################################
  This script does does not contain alot of documentation because the
  code is intuitive and straight forward

--script by code wizardX (@mussajnrkamphulusa@gmail.com / +265 991 868 511)
###########################################################################*/

$(function() {
    class Product_Catalogue {
        constructor() {
            this.total_items = 0
            this.total_cost  = 0
            this.cart        = []
    
            // Globe Wifi Packages
            this.surfer_lite          = { price: 8000,  quantity: 0, }
            this.surfer_premium       = { price: 12000, quantity: 0, }
            this.surf_plus            = { price: 20000, quantity: 0, }
            this.surfer_premium_plus  = { price: 30000, quantity: 0, }
    
            // Corporate Max Packages
            this.max_lite             = { price: 124950, quantity: 0, }
            this.max_lite_plus        = { price: 187400, quantity: 0, }
            this.max_premium          = { price: 312350, quantity: 0, }
            this.max_premium_plus     = { price: 499750, quantity: 0, }
    
            // Corporate Net
            this.kawawa_100          = { price: 19000,  quantity: 0, }
            this.kawawa_300          = { price: 57500,  quantity: 0, }
            this.kawawa_dedicated_2  = { price: 12500,  quantity: 0, }
            this.kawawa_dedicated_3  = { price: 24000,  quantity: 0, }
            this.kawawa_200          = { price: 37500,  quantity: 0, }
            this.kawawa_blast        = { price: 50000,  quantity: 0, }
            this.voom                = { price: 200000, quantity: 0, }
            this.loyalty             = { price: 600000, quantity: 0, }
            this.equipment           = { price: 50000,  quantity: 0, }

            this.increase = function(product) {
                this[product].quantity += 1
            }

            this.decrease = function(product) {
                if (this[product].quantity >= 1)
                    this[product].quantity -= 1
            }
        }
    }
    
    catalogue = new Product_Catalogue()

    // Handles product quantity incrementation
    $(".increase").click(function() {
        var id = $(this).parent().attr("id");
        catalogue.increase(id)
        update_quantity(id)
    })

    // Handles product quantity decrementation
    $(".decrease").click(function() {
        var id = $(this).parent().attr("id");
        catalogue.decrease(id)
        update_quantity(id)
    })

    // Handles adding product to cart
    $(".add").click(function() {
        var id = $(this).parent("td").parent().children().children("div").attr("id")
        add_to_cart(id)
    })

    // Clear cart
    $("#empty").click(function() {
        empty_cart()
    })

    // Checkout
    $("#checkout").click(function() {
        if (catalogue.total_items === 0) {
            $(".modal-body")
            .addClass("text-danger").
            text("Please add products to cart.")
        }
        else {
            $(".modal-body")
            .removeClass("text-danger")
            .text("Sorry we are still cooking the code!")
            purchase_info()
        }
    })

    function add_to_cart(id) {
        if (catalogue[id].quantity === 0) {
            calculate_total_items()
            calculate_total_cost()
            return
        }
        if (!check_cart_for_item(id)) {
            catalogue.cart.push(id)
        }
        calculate_total_items()
        calculate_total_cost()
    }

    function calculate_total_items() {
        var total = 0
        for (i = 0 ; i < catalogue.cart.length ; i++ ) {
            total += catalogue[catalogue.cart[i]].quantity
        }
        catalogue.total_items = total
        update_items()
    }

    function calculate_total_cost() {
        var cost = 0

        for (i = 0 ; i < catalogue.cart.length ; i++ ) {
            var product = catalogue[catalogue.cart[i]]
            var price   = product.quantity * product.price
            cost += price
        }
        catalogue.total_cost = cost
        update_cost()
    }

    function update_items() {
        console.log(catalogue.total_items)
        $("#cart-items").text(format_digits(catalogue.total_items))
    }

    function update_cost() {
        $("#cost").text(format_digits(catalogue.total_cost))
    }

    function empty_cart() {
        catalogue.cart_items = 0
        update_items()

        for (i = 0 ; i < catalogue.cart.length ; i++ ) {
            catalogue[catalogue.cart[i]].quantity = 0
            update_quantity(catalogue.cart[i])
        }

        catalogue.cart        = []
        catalogue.total_cost  = 0
        catalogue.total_items = 0
        update_cost()
        update_items()
    }

    function update_quantity(id) {
        var quantity_output = "#" + id + " > .quantity"
        $(quantity_output).val(catalogue[id].quantity)
    }

    function check_cart_for_item(item) {
        for (i = 0 ; i <= catalogue.cart.length ; i++) {
            if (catalogue.cart[i] == item) return true
            else continue
        }
        return false
    }

    function purchase_info() {
        $(".modal-body").html("")
        $(".modal-body").html("<ul id=\"purchases\" class=\"list-unstyled\">")

        for (var i = 0; i < catalogue.cart.length; i++) {
            var product      = catalogue.cart[i]
            var product_name = product.substr(0, 1)
            product_name     = product_name.toUpperCase() + product.substr(1).replace('_', ' ')
            var info         =  product_name + " x" + catalogue[product].quantity
            info            += " MK " + format_digits((catalogue[product].price * catalogue[product].quantity))
            var tag = "<li class=\"text-black\">" + info + "</li>\n"
            $(".modal-body > ul").append(tag)
        }

        calculate_total_cost()
        var total = format_digits(catalogue.total_cost)
        $(".modal-body").append("<p class=\"text-success bold\">Total cost: MK " + total)
    }

    function format_digits(amount="") {
        var digits = amount
        
        if (typeof digits === "number")
            digits += ''

            if (digits.length === 3) {
                return digits
            }

            else if (digits.length === 4) {
                digits = digits.substring(0, 1) + "," + 
                         digits.substring(1)
            }

            else if (digits.length === 5) {
                digits = digits.substring(0, 2) + "," + 
                         digits.substring(2)
            }

            else if (digits.length === 6) {
                digits = digits.substring(0, 3) + "," + 
                         digits.substring(3,)
            }

            else if (digits.length === 7) {
                digits = digits.substring(0, 1) + "," +
                         digits.substring(1, 4) + "," + 
                         digits.substring(4, 7)
            }

            else if (digits.length === 8) {
                digits = digits.substring(0, 2) + "," +
                         digits.substring(2, 5) + "," +
                         digits.substring(5, 8)
            }

            else if (digits.length === 9) {
                digits = digits.substring(0, 3) + "," +
                         digits.substring(3, 6) + "," +
                         digits.substring(6, 9)
            }
            
        return digits
    }
})