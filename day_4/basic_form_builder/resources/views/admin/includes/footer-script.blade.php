<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="{{ asset('/admin/assets/dist/jquery-steps.js')}}"></script>
<script>
    // var frmInfo = $('#frmInfo');
    // var frmInfoValidator = frmInfo.validate();

    // var frmAttachment = $('#frmAttachment');
    // var frmAttachmentValidator = frmAttachment.validate();

    // var frmPayment = $('#frmPayment');
    // var frmPaymentValidator = frmPayment.validate();

    $('#demo').steps({
        // onChange: function (currentIndex, newIndex, stepDirection) {
        //   // step1
        //   if (currentIndex === 0) {
        //     if (stepDirection === 'forward') {
        //       return frmInfo.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //       frmInfoValidator.resetForm();
        //     }
        //   }
        //
        //   // step2
        //   if (currentIndex === 1) {
        //     if (stepDirection === 'forward') {
        //       return frmAttachment.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //       frmAttachmentValidator.resetForm();
        //     }
        //   }
        //   // step3
        //   if (currentIndex === 2) {
        //     if (stepDirection === 'forward') {
        //       return frmPayment.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //       frmPaymentValidator.resetForm();
        //     }
        //   }
        //   return true;
        // },
        onFinish: function() {
            alert('Wizard Completed');
        }
    });
</script>