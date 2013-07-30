<div class="box">
    <div class="title">
        <h5>信息列表</h5>
        <div class="search">
            <form action="#" method="post">
                <div class="input">
                    <input type="text" id="search" name="search">
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Search" class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false">
                </div>
            </form>
        </div>
    </div>
    <div class="table">
        <form action="" method="post">
            <table>
                <thead>
                <tr>
                    <th class="left">标题</th>
                    <th></th>
                    <th>Added</th>
                    <th>Category</th>
                    <th class="selected last"><input type="checkbox" class="checkall" /></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="title">24" LED Monitor</td>
                    <td class="price">$110.00</td>
                    <td class="date" id="dp1375169552169">April 25th, 2010 at 4:15 PM</td>
                    <td class="category">Monitors</td>
                    <td class="selected last"><input type="checkbox" /></td>
                </tr>
                <tr>
                    <td class="title">27" LCD Flat Panel</td>
                    <td class="price">$150.00</td>
                    <td class="date" id="dp1375169552170">April 25th, 2010 at 4:15 PM</td>
                    <td class="category">Monitors</td>
                    <td class="selected last"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="title">6GB 240-Pin DDR3 SDRAM DDR3 1600</td>
                    <td class="price">$80.00</td>
                    <td class="date" id="dp1375169552171">April 25th, 2010 at 4:15 PM</td>
                    <td class="category">Memory</td>
                    <td class="selected last"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="title">500GB 7200 RPM 16MB Cache SATA 3.0Gb/s 3.5</td>
                    <td class="price">$92.00</td>
                    <td class="date" id="dp1375169552172">April 25th, 2010 at 4:15 PM</td>
                    <td class="category">Hard Drives</td>
                    <td class="selected last"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="title">2GB 240-Pin DDR3 SDRAM DDR3 1600</td>
                    <td class="price">$52.00</td>
                    <td class="date" id="dp1375169552173">April 25th, 2010 at 4:15 PM</td>
                    <td class="category">Memory</td>
                    <td class="selected last"><input type="checkbox"></td>
                </tr>
                </tbody>
            </table>

            <?php echo $pagination; ?>

        </form>
    </div>
</div>