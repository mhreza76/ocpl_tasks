<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="{{ asset('/admin/assets/dist/jquery-steps.js')}}"></script>
<script>
    // var frmOne = $('#frmOne');
    // var frmOneValidator = frmOne.validate();
    //
    // var frmTwo = $('#frmTwo');
    // var frmTwoValidator = frmTwo.validate();
    //
    // var frmThree = $('#frmThree');
    // var frmThreeValidator = frmThree.validate();

    $('#demo').steps({
        // onChange: function (currentIndex, newIndex, stepDirection) {
        //   // step1
        //   if (currentIndex === 0) {
        //     if (stepDirection === 'forward') {
        //       return frmOne.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //         frmOneValidator.resetForm();
        //     }
        //   }
        //
        //   // step2
        //   if (currentIndex === 1) {
        //     if (stepDirection === 'forward') {
        //       return frmTwo.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //         frmTwoValidator.resetForm();
        //     }
        //   }
        //   // step3
        //   if (currentIndex === 2) {
        //     if (stepDirection === 'forward') {
        //       return frmThree.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //         frmThreeValidator.resetForm();
        //     }
        //   }
        //   return true;
        // },
        onFinish: function() {
            alert('Wizard Completed');
        }
    });
</script>
