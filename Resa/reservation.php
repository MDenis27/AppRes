<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Reservation</title>
    <h1> Reservation </h1>
</head>

<h3>
    Please fill in the form below
</h3>

The price is 10€ until 12 years and then 15€.
<br>
The price of the cancellation insurance is 20€ regardless of the number of passengers.
<br>
<div style="
    position absolute;
    top 10em;
">
    <form>
        <div style ="
            position: absolute;
        ">
            Destination:
            <br>
            Number of passengers:
            <br>
            Cancellation insurance:
        </div>
        <div style="
            position: absolute;
            left: 15em;
        ">
            <select name="destination">
                <option value="EHAM">Amsterdam</option>
                <option value="LEBL">Barcelone</option>
                <option value="EDDB">Berlin</option>
                <option value="LFPG">Paris Charles De Gaulle</option>
            </select>
            <br>
            <input type="text" name="number">
            <br>
            <input id="checkBox" type="checkbox" >
        </div>
        <div style="
            position: absolute;
            top: 15em;
        ">
        <input type="submit" value="Next step">
        </div>
    </form>
</div>