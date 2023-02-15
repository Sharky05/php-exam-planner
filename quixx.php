
table {
   border: 1px solid black;
  table-layout: fixed;
  width: 650px;
}

tr:nth-child(1) {
  background-color: red;
  color: red;
}

tr:nth-child(2) {
  background-color: yellow;
  color: yellow;
}

tr:nth-child(3) {
  background-color: lime;
  color: lime;
}

tr:nth-child(4) {
  background-color: blue;
  color: blue;
}

tr, td {
   border: 2px solid;
  width: 40px
}

tr {
   height: auto;
   text-align: center;
   margin: 0;
   padding: 0;
}

td {
   padding 2px;
}

input, select {
   margin: 0;
   padding: 4;
   height: 100%;
   width: 100%;
  font-size: 30px;
}



<!DOCTYPE html>
<html>
<head>
<title>HTML CSS JS</title>
</head>
<body>
  <table>
    <tbody>
      <tr>
     <td> <input id="red_2" type="button" value="2"> </td>
     <td> <input id="red_3" type="button" value="3"> </td>
     <td> <input id="red_4" type="button" value="4"> </td>
     <td> <input id="red_5" type="button" value="5"> </td>
     <td> <input id="red_6" type="button" value="6"> </td>
     <td> <input id="red_7" type="button" value="7"> </td>
     <td> <input id="red_8" type="button" value="8"> </td>
     <td> <input id="red_9" type="button" value="9"> </td>
     <td> <input id="red_10" type="button" value="10"> </td>
     <td> <input id="red_11" type="button" value="11"> </td>
     <td> <input id="red_12" type="button" value="12"> </td>
      </tr>
      <tr>
     <td> <input id="yellow_2" type="button" value="2"> </td>
     <td> <input id="yellow_3" type="button" value="3"> </td>
     <td> <input id="yellow_4" type="button" value="4"> </td>
     <td> <input id="yellow_5" type="button" value="5"> </td>
     <td> <input id="yellow_6" type="button" value="6"> </td>
     <td> <input id="yellow_7" type="button" value="7"> </td>
     <td> <input id="yellow_8" type="button" value="8"> </td>
     <td> <input id="yellow_9" type="button" value="9"> </td>
     <td> <input id="yellow_10" type="button" value="10"> </td>
     <td> <input id="yellow_11" type="button" value="11"> </td>
     <td> <input id="yellow_12" type="button" value="12"> </td>
      </tr>
      <tr>
     <td> <input id="green_2" type="button" value="2"> </td>
     <td> <input id="green_3" type="button" value="3"> </td>
     <td> <input id="green_4" type="button" value="4"> </td>
     <td> <input id="green_5" type="button" value="5"> </td>
     <td> <input id="green_6" type="button" value="6"> </td>
     <td> <input id="green_7" type="button" value="7"> </td>
     <td> <input id="green_8" type="button" value="8"> </td>
     <td> <input id="green_9" type="button" value="9"> </td>
     <td> <input id="green_10" type="button" value="10"> </td>
     <td> <input id="green_11" type="button" value="11"> </td>
     <td> <input id="green_12" type="button" value="12"> </td>
      </tr>
      <tr>
     <td> <input id="blue_2" type="button" value="2"> </td>
     <td> <input id="blue_3" type="button" value="3"> </td>
     <td> <input id="blue_4" type="button" value="4"> </td>
     <td> <input id="blue_5" type="button" value="5"> </td>
     <td> <input id="blue_6" type="button" value="6"> </td>
     <td> <input id="blue_7" type="button" value="7"> </td>
     <td> <input id="blue_8" type="button" value="8"> </td>
     <td> <input id="blue_9" type="button" value="9"> </td>
     <td> <input id="blue_10" type="button" value="10"> </td>
     <td> <input id="blue_11" type="button" value="11"> </td>
     <td> <input id="blue_12" type="button" value="12"> </td>
      </tr>
    </tbody>
  </table>
  
  <p id="red_score">
    Red Score: 0
  </p>
  
  <p id="yellow_score">
    Yellow Score: 0
  </p>
  
  <p id="green_score">
    Green Score: 0
  </p>
  
  <p id="blue_score">
    Blue Score: 0
  </p>
  
  <p id="total_score">
    Total Score: 0
  </p>
  
</body>
</html>
