<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Reservation</title>
    <h1> Reservation </h1>
</head>

<h3> Please fill in the form below </h3>

<form>
  Destination:
  <select name="destination">
    <option value="EHAM">Amsterdam</option>
    <option value="LEBL">Barcelone</option>
    <option value="EDDB">Berlin</option>
    <option value="LFPG">Paris Charles De Gaulle</option>
  </select>
  <br>
  Number of passagers:
  <input type="text" name="number">
  <br>
  Cancellation insurance:
  <input id="checkBox" type="checkbox" >
  <br>
  <input type="submit" value="Next step">

</form>