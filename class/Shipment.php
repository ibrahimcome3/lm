<?php
class Shipment
{

    public $shipmentAreas = array();


    function __construct()
    {

        $this->set_shipment_area_cost();

    }


    function set_shipment_area_cost()
    {

        include "conn.php";
        $sql = "SELECT * FROM `shipping_areas`";
        $result = $mysqli->query($sql);
        if ($result) {
            $this->shipmentAreas = $result;
        }
    }

    function get_shipment_area()
    {

        return $this->shipmentAreas;

    }

    function get_shipping_cost($id)
    {
        include "conn.php";
        $sql = "SELECT * FROM `shipping_address` left join shipping_areas on shipping_address.`ship_cost` = shipping_areas.`area_id` where shipping_address_no = $id";
        $result = $mysqli->query($sql);
        $row = mysqli_fetch_array($result);
        if ($result) {

            return $row['area_cost'];

        }
    }
}

?>