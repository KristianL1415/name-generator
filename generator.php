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
        $locations = array();
        if (($file = fopen("locations.csv", "r")) !== FALSE)
        {
            while (($location = fgets($file)) !== FALSE)
            {
                $locations[] = $location;
            }
            fclose($file);
        }
        $index = rand(0, count($locations) - 1);

        return $locations[$index];
    }

    function getName()
    {
        $names = array();
        if (($file = fopen("names.csv", "r")) !== FALSE)
        {
            while (($name = fgets($file)) !== FALSE)
            {
                $names[] = $name;
            }
            fclose($file);
        }
        $index = rand(0, count($names) - 1);

        return $names[$index];
    }
?>
