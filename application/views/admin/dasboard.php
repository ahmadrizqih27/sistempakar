  <?php $this->load->view('admin/header'); ?>

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Latih</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['datalatih']; ?> Data</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Uji</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['datauji']; ?> Data</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Siswa</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $data['siswa']; ?> Siswa</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['admin']; ?> Admin</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Gaya Belajar di Data Latih</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <div id="container" style="height: 100%"></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Perbandingan Data Latih dan Uji   </h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
                 <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/dasboardd/0'; ?>" method="post" enctype="multipart/form-data">
                 <div class="form-group" style=" "> 
                            <div class="col-lg-11" style="margin-top: 10px">
                            <select class="form-control" name="pilihan">
                                <option value="1" >Data Uji 10 % Data Latih 90%</option>  
                                <option value="2" >Data Uji 20 % Data Latih 80%</option>  
                                <option value="3" >Data Uji 30 % Data Latih 70%</option> 
                                <option value="4" >Data Uji 40 % Data Latih 60%</option>  
                            </select>
                            </div>

                            
                       
                          
                              <input type="submit" value="Cek Data" class="btn btn-success" style="margin-left: 14px; margin-top: 10px" >

                      </div>
                    </form> 
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <div id="container2" style="height: 100%"></div>
                  </div>
                  
                 <div class="mt-4 text-center small">
                    <span class="mr-2">
                     Data Latih : <?php echo $data['datalatih']; ?>
                    </span>
                    <span class="mr-2">
                      Data Uji : <?php echo $data['datauji']; ?>
                    </span>
                    <span class="mr-2">
                    Jumlah Data : <?php echo $data['jumlah']; ?>
                    </span>
                  </div>
                   <a href="<?php echo site_url('admin/detail_datauji/'.$data['datauji']);?>" class="btn btn-xs btn-info"> <i class="fas fa-info-circle"></i></a>
                </div>
              </div>
            </div>
          </div>


    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
       <script type="text/javascript">
var dom = document.getElementById("container2");
var myChart = echarts.init(dom);
var app = {};
option = null;
app.title = 'Data';

option = {
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data:['Latih','Uji']
    },
    series: [
        {
            name:'Data',
            type:'pie',
            radius: ['50%', '70%'],
            avoidLabelOverlap: false,
            label: {
                normal: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    show: true,
                    textStyle: {
                        fontSize: '30',
                        fontWeight: 'bold'
                    }
                }
            },
            labelLine: {
                normal: {
                    show: false
                }
            },
            data:[
                {value:<?php echo $data['datalatih'];?>, name:'Latih'},
                {value:<?php echo $data['datauji'];?>, name:'Uji'},
            ]
        }
    ]
};
;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
</script>   

<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
       <script type="text/javascript">
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
option = null;
app.title = '坐标轴刻度与标签对齐';

option = {
    color: ['#3398DB'],
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            data : ['Visual', 'Auditory', 'Kinestetik'],
            axisTick: {
                alignWithLabel: true
            }
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'data',
            type:'bar',
            barWidth: '60%',
            data:[<?php echo $data['visual']; ?>, <?php echo $data['audio']; ?>, <?php echo $data['kines']; ?>]
        }
    ]
};
;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
 
 <?php $this->load->view('admin/footer'); ?>