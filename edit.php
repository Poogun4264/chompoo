// edit.php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Contacts</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Edit Contacts</h2>
    <form id="editForm">
        <table border="1" id="contactsTable">
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <!-- Rows will be loaded here -->
        </table>
    </form>

    <div id="response"></div>

    <script>
        $(document).ready(function() {
            // Function to load data into the table
            function loadContacts() {
                $.ajax({
                    url: 'get_contacts.php',
                    type: 'GET',
                    success: function(data) {
                        $('#contactsTable').html(data);
                    },
                    error: function() {
                        alert('Failed to load contacts.');
                    }
                });
            }

            // Load contacts when the page is ready
            loadContacts();

            // Update contact information
            $(document).on('click', '.updateBtn', function() {
                var id = $(this).data('id');
                var name = $('input[name="name[' + id + ']"]').val();
                var phone = $('input[name="phone[' + id + ']"]').val();

                $.ajax({
                    url: 'update.php',
                    type: 'POST',
                    data: {
                        update_id: id,
                        name: name,
                        phone: phone
                    },
                    success: function(response) {
                        $('#response').html(response);
                        // Reload the contacts after update
                        loadContacts();
                    },
                    error: function() {
                        alert('Failed to update record.');
                    }
                });
            });
        });
    </script>
</body>
</html>
