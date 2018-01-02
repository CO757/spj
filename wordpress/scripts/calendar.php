<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Calendar</title>
    </head>
    <body>

        <?php
            // get from API
            $api = "";
        ?>

        <div>
        //arrows, title
            <table>

                <thead>
                    <tr>
                        <th>
                            <
                        </th>
                        <th colspan="6" style="text-align:center;">
                            <b>
                                Januar 2018
                            </b>
                        </th>
                        <th>
                            >
                        </th>
                    </tr>
                </thead>

                <tbody>
                //fill table
                <?php
                $array = array(1,2,3,4,5);
                foreach($array as $item){
                    echo "<tr>
                        <td>
                            $item
                        </td>
                        <td>
 $item
                        </td>
                        <td>
 $item
                        </td>
                        <td>
 $item
                        </td>
                        <td>
 $item
                        </td>
                        <td>
 $item
                        </td>
                        <td>
 $item
                        </td>
                        <td>
 $item
                        </td>
                    </tr>";
                }

                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>