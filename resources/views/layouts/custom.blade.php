<script>
    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = "{{ session('success') }}";
        const errorMessage = "{{ session('error') }}";

        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: successMessage,
            });
        } else if (errorMessage) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: errorMessage,
            });
        }
    });

    // delete button 
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('[data-kt-ecommerce-category-filter="delete_row"]').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default link action

                // Get the URL from the data-url attribute
                const deleteUrl = this.getAttribute('data-url');

                // Show SweetAlert2 confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Perform the deletion using a form submit or AJAX request
                        fetch(deleteUrl, {
                                method: 'DELETE',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    Swal.fire('Deleted!', 'The item has been deleted.', 'success')
                                        .then(() => {
                                            window.location.reload();
                                        });
                                } else {
                                    Swal.fire('Error!', 'There was a problem deleting the item.', 'error');
                                }
                            })
                            .catch(error => {
                                Swal.fire('Error!', 'There was a problem deleting the item.', 'error');
                            });
                    }
                });
            });
        });
    });
    // end btn

    // ckeditor-init.js
    function initializeCKEditors(selectors) {
        const editors = {};

        selectors.forEach(selector => {
            const element = document.querySelector(selector);

            if (element) {
                ClassicEditor
                    .create(element)
                    .then(editor => {
                        // Store the editor instance
                        editors[selector] = editor;
                    })
                    .catch(error => {
                        console.error(`Failed to initialize CKEditor for ${selector}:`, error);
                    });
            } else {
                console.warn(`No element found for selector: ${selector}`);
            }
        });

        return editors;
    }

    function attachFormSubmissionHandler(formId, editors) {
        const form = document.getElementById(formId);
        if (!form) {
            console.warn(`Form with ID ${formId} not found`);
            return;
        }

        form.onsubmit = function() {
            Object.keys(editors).forEach(selector => {
                const editor = editors[selector];
                if (editor) {
                    document.querySelector(selector).value = editor.getData();
                }
            });
        };
    }

    
</script>