<!-- Name Generator -->

<?php
    $location = $_POST['location'];
    $name = $_POST['name'];

    if (empty($location))
    {
        $location = getLocation();
    }
    if (empty($name))
    {
        $name = getName();
    }

    echo "{$location} {$name}";

    function getLocation()
    {
        $locations = array("Minnesota", "New York", "Houston", "Miami");
        $index = rand(0, count($locations) - 1);

        return $locations[$index];
    }

    function getName()
    {
        $names = array("Bison", "Dragons", "Eagles", "Bears", "Lions");
        $index = rand(0, count($names) - 1);

        return $names[$index];
    }
?>
