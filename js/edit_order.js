jQuery(document).ready(function($) {
    // Enable editing on click
    $('.editable-acf-field').on('click', function() {
        var $this = $(this);
        var postID = $this.data('post-id');
        var acfField = $this.data('acf-field');
        var currentValue = $this.text().trim();
        var newValue = prompt('Edit the value:', currentValue);

        // If the user didn't cancel and the value has changed
        if (newValue !== null && newValue !== currentValue) {
            // Send AJAX request to update the ACF field
            $.ajax({
                type: 'POST',
                url: ajax_object.ajaxurl, // Use the passed ajaxurl variable
                data: {
                    action: 'make_acf_field_editable',
                    post_id: postID,
                    acf_field: acfField,
                    new_value: newValue,
                    nonce: ajax_object.nonce // Add nonce for security
                },
                success: function(response) {
                    // Update the displayed value
                    $this.text(response);
                }
            });
        }
    });
});