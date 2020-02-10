<?php require 'global_header.php'; ?>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="<?php echo base_url('public/assets/img/brandix.png'); ?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url('home'); ?>" class="simple-text">
                    Sithumini
                    Enterprises
                </a>
            </div>

            <ul class="nav">
                <li class="nav-head">
                    <a href="#">
                        <p>Product Forms</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url(); ?>needle_type">
                        <i class="pe-7s-graph"></i>
                        <p>Add New Product</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url(); ?>needle_issue">
                        <i class="pe-7s-graph"></i>
                        <p>Add User</p>
                    </a>
                </li>
                <!-- <li class="nav-head">
                    <a href="#">
                        <p>Stock Update</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url(); ?>main_stock">
                        <i class="pe-7s-graph"></i>
                        <p>main stock form</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url(); ?>room_stock">
                        <i class="pe-7s-graph"></i>
                        <p>room stock form</p>
                    </a>
                </li>
              <li class="nav-head">
                    <a href="#">
                        <p>Reports</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url(); ?>main_stock_report">
                        <i class="pe-7s-graph"></i>
                        <p>Main needle stock</p>
                    </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>room_stock_report">
                            <i class="pe-7s-graph"></i>
                            <p> needle room stock</p>
                        </a>                   
                </li>
                     <li class="">
                        <a href="<?php echo base_url(); ?>needle_issue_report">
                            <i class="pe-7s-graph"></i>
                            <p> issue summary </p>
                        </a>                   
                </li>
                     <li class="">
                        <a href="<?php echo base_url(); ?>line_wise_report">
                            <i class="pe-7s-graph"></i>
                            <p> line wise summary </p>
                        </a>                   
                </li>
                 
                   
                   
                   
               <li class="nav-head">
                    <a href="#">
                        <p>Recovery Forms</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url(); ?>needle_issue_recovery">
                        <i class="pe-7s-graph"></i>
                        <p>Needle issue</p>
                    </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>main_stock_recovery">
                            <i class="pe-7s-graph"></i>
                            <p> Main stock</p>
                        </a>                   
                </li>
                     <li class="">
                        <a href="<?php echo base_url(); ?>room_stock_recovery">
                            <i class="pe-7s-graph"></i>
                            <p> Room stock </p>
                        </a>                   
                </li>
                 -->
            
            
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <?php require 'global_top.php'; ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"></h4>
                                <!-- <button class="email_button">Send Email</button> -->
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <canvas id="bar-chart" width="400px" height="250"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <canvas id="pie-chart" width="400px" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            
        </footer>

    </div>
</div>

<?php require 'global_footer.php'; 
$num = 100;
?>

<script type="text/javascript">
    // Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "March", "April", "May", "June", "Jule", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Total Needle Request Count",
          backgroundColor: 'rgba(0, 0, 0, 0)',
          borderColor : 'rgb(29,199,234)',
          data: [60,58,55,52,60,65,102,72,60,48,78,56]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Total Needle Request Count'
      }
    }
});

new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
        labels: ["BLUNT NEEDLE", "MISSING NEEDLE", "BROKEN NEEDLE", "LINE FEEDING NEEDLE"],
      datasets: [{
        label: "Needle Issueing Reason Summary",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
        data: [78,20,32,78]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Needle Issueing Reason Summary'
      }
    }
});
</script>


