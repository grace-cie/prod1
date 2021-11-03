<html>
    <style>
        #myTable td {
            padding: 0.25em;
        }

        #val {
            display: block;
            margin-top: 0.5em;
        }
    </style>
    <body>
        <table id="myTable">
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Remove</th>
            </tr>
            <tr>
                <td>Hoodie</td>
                <td class="count-me">15.00</td>
                <td><button onClick="onClickRemove(this)">Remove</button></td>
            </tr>
            <tr>
                <td>Nike Cap</td>
                <td class="count-me">10.99</td>
                <td><button onClick="onClickRemove(this)">Remove</button></td>
            </tr>
        </table>
        <span id="val"></span>
    </body>
    <script>
        updateSubTotal(); // Initial call

        function updateSubTotal() {
        var table = document.getElementById("myTable");
        let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
            return total + parseFloat(row.cells[1].innerHTML);
        }, 0);
        document.getElementById("val").innerHTML = "SubTotal = $" + subTotal.toFixed(2);
        }

        function onClickRemove(deleteButton) {
        let row = deleteButton.parentElement.parentElement;
        row.parentNode.removeChild(row);
        updateSubTotal(); // Call after delete
        }
    </script>
</html>