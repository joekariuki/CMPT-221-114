<!DOCTYPE html>
<html>
<title>Quick Links</title>

<?php

# Includes header
require( 'includes/header.php' ) ;

require( 'includes/connect_db.php' ) ;

# Includes these helper functions
require( 'includes/helpers.php' ) ;

# Show full info on a record with id number linked from the quick links page
if(isset($_GET['id'])) {
          show_record($dbc, $_GET['id']);
}

# Close the connection
mysqli_close( $dbc ) ;


# Includes header
require( 'includes/footer.php' );

?>


