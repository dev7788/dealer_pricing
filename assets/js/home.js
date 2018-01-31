$(document).ready(function() {
   $('.project_attr').change(function () {
       var id = $(this).attr('id');
       var value = $(this).val()

       var f5 = $('#base_price').val();
       var c7 = $('#height').val();
       var f7 = f5 - (120.34 - c7);

       var c9 = $('#width').val();
       var f9 = 0
       if (c9 > 191) {
           f9 = f7 * (c9*1.0/ 12)
       } else {
           f9 = (f7 * (c9*1.0/12))*1.05
       }

       var f10 = 0;
       if (c9 > 287) {
           f10 = f9 * 0.95
       } else {
           f10 = f9
       }

       var c11 = $('#panel_number').val()
       var c12 = c9/c11
       $('#panel_width').val(round(c12, 0))
       var f12 = 0
       if (c12 < 32) {
           f12 = f10 * 1.05
       } else {
           f12 = f10
       }

       var c14 = $('#single_monolithic').val()
       var f14 = 0
       if (parseInt(c14) === 1) {
           f14 = f12 * 0.95
       }

       var c15 = $('#single_laminated').val()
       var f15 = 0;
       if (parseInt(c15) === 1) {
           f15 = f14
       }

       var c16 = $('#double_glazed').val()
       var f16 = 0;
       if (parseInt(c16) === 1) {
           f16 = f12 * 0.95
       }

       var c17 = $('#double_txx').val()
       var f17 = 0
       if (parseInt(c17) === 1) {
           f17 = f12
       }

       var c18 = $('#triple_glazed').val()
       var f18 = 0
       if (parseInt(c18) === 1) {
           f18 = f12 * 1.1
       }

       var f20 = f14 + f15 + f16 + f17 + f18

       var c22 = $('#opening_inwards').val()
       var f22 = 0
       if (parseInt(c22) === 1) {
           f22 = f20
       }

       var c23 = $('#opening_outwards').val()
       var f23 = 0
       if (parseInt(c23) === 1) {
           f23 = f20
       }

       var f25 = f22 + f23

       var c27 = $('#opening_right').val()
       var f27 = 0
       if (parseInt(c27) === 1) {
           f27 = f25
       }

       var c28 = $('#opening_left').val()
       var f28 = 0
       if (parseInt(c28) === 1) {
           f28 = f25
       }

       var c29 = $('#opening_both').val()
       var f29 = 0
       if (parseInt(c29) === 1) {
           f29 = f25
       }

       var f31 = f27 + f28 + f29;

       var c33 = $('#straight').val()
       var f33 = 0
       if (parseInt(c33) === 1) {
           f33 = f31
       }

       var c34 = $('#curved').val()
       var f34 = 0
       if (parseInt(c34) === 1) {
           f34 = f31 * 1.1
       }

       var c35 = $('#corner').val()
       var f35 = 0
       if (parseInt(c35) === 1) {
           f35 = f31 * 1.05
       }

       var f37 = f33 + f34 + f35

       var c39 = $('#fully_recessed').val()
       var f39 = 0
       if (parseInt(c39) === 1) {
           f39 = f37
       }

       var c40 = $('#partial_recess').val()
       var f40 = 0
       if (parseInt(c40) === 1) {
           f40 = f37
       }

       var c41 = $('#top_amount').val()
       var f41 = 0
       if (parseInt(c41) === 1) {
           f41 = f37
       }

       var f47 = f39 + f40 + f41
       $('#total_job_cost').text('$' + f47.toFixed(2))
       var f48 = f47/(c9/12)
       $('#per_lineal_ft').text('$' + f48.toFixed(2))
       var f50 = f47 * 0.85
       $('#display_price').text('$' + f50.toFixed(2))

       var l47 = $('#dealer_margin').val()
       var l48 = f47/(1-l47/100)
       $('#retail_price').text('$' + l48.toFixed(2))
       var l50 = l48 - f47
       $('#dealer_profit').text('$' + l50.toFixed(2))
   })
});

function round(value, decimals) {
    return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
}
