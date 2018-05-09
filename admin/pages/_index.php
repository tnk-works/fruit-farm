<section class="no-padding-bottom">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Dashboard</h4>
            </div>
            <div class="card-body">
                <?PHP
                $db->Query("SELECT 
                    COUNT(id) all_users, 
                    SUM(money_b) money_b, 
                    SUM(money_p) money_p, 
                    SUM(a_t) a_t, 
                    SUM(b_t) b_t, 
                    SUM(c_t) c_t, 
                    SUM(d_t) d_t, 
                    SUM(e_t) e_t, 
                    SUM(a_b) a_b, 
                    SUM(b_b) b_b, 
                    SUM(c_b) c_b, 
                    SUM(d_b) d_b, 
                    SUM(e_b) e_b, 
                    SUM(all_time_a) all_time_a, 
                    SUM(all_time_b) all_time_b, 
                    SUM(all_time_c) all_time_c, 
                    SUM(all_time_d) all_time_d, 
                    SUM(all_time_e) all_time_e,
                    SUM(payment_sum) payment_sum, 
                    SUM(insert_sum) insert_sum
                    FROM db_users_b
                ");
                $data_stats = $db->FetchArray();
                ?>
                <table class="table table-striped">
                    <tr>
                        <td><b>Registered Users:</b></td>
                        <td width="100" align="center"><?=$data_stats["all_users"]; ?> чел.</td>
                    </tr>
                    <tr> <td colspan="2" align="center"><b>- - - - -</b></td> </tr>
                    <tr>
                        <td><b>Silver on accounts (for purchases):</b></td>
                        <td width="100" align="center"><?=sprintf("%.0f",$data_stats["money_b"]); ?></td>
                    </tr>
                    <tr>
                        <td><b>Silver on accounts (On withdrawal):</b></td>
                        <td width="100" align="center"><?=sprintf("%.0f",$data_stats["money_p"]); ?></td>
                    </tr>
                    <tr> <td colspan="2" align="center"><b>- - - - -</b></td> </tr>
                    <tr>
                        <td><b>Bought trees (Lime):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["a_t"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>Bought trees (Cherry):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["b_t"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>Bought trees (Strawberry):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["c_t"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>Bought trees (Kiwi):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["d_t"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>Bought trees (Orange):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["e_t"]); ?> шт.</td>
                    </tr>
                    <tr> <td colspan="2" align="center"><b>- - - - -</b></td> </tr>
                    <tr>
                        <td><b>In warehouses (Lime):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["a_b"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>In warehouses (Cherry):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["b_b"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>In warehouses (Strawberry):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["c_b"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>In warehouses (Kiwi):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["d_b"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>In warehouses (Orange):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["e_b"]); ?> шт.</td>
                    </tr>
                    <tr> <td colspan="2" align="center"><b>- - - - -</b></td> </tr>
                    <tr>
                        <td><b>Collected for all time (Lime):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["all_time_a"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>Collected for all time (Cherry):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["all_time_b"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>Collected for all time (Strawberry):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["all_time_c"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>Collected for all time (Kiwi):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["all_time_d"]); ?> шт.</td>
                    </tr>
                    <tr>
                        <td><b>Collected for all time (Orange):</b></td>
                        <td width="100" align="center"><?=intval($data_stats["all_time_e"]); ?> шт.</td>
                    </tr>
                    <tr> <td colspan="2" align="center"><b>- - - - -</b></td> </tr>
                    <tr>
                        <td><b>User input:</b></td>
                        <td width="100" align="center"><?=sprintf("%.2f",$data_stats["insert_sum"]); ?> <?=$config->VAL; ?></td>
                    </tr>
                    <tr>
                        <td><b>Paid to users:</b></td>
                        <td width="100" align="center"><?=sprintf("%.2f",$data_stats["payment_sum"]); ?> <?=$config->VAL; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>