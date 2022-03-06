<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản Lí Kho</title>
  <!-- <link rel="stylesheet" href="./css/index.css">   
  
  <link rel="stylesheet" href="./css/body.css"/>    -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../resources/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../resources/css/adminlte.min.css">
  <link rel="stylesheet" href="../resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../resources/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../resources/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="">
  <!-- @include('layout.script') -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
  <div class="d-flex">

    @include('layout.menu')



    <div class="home-content container-fluid pt-3">
      <center>
        <h2>TỔNG QUAN KHO HÀNG</h2>
      </center>
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info elevation-4">
            <div class="inner">
              <h3>150</h3>

              <p><b>Tổng số linh kiện</b></p>
            </div>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16">
                <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
              </svg>
            </div>
            <a href="#" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning elevation-4">
            <div class="inner">
              <h3>244</h3>

              <p><b>Tổng số sản phẩm</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-white elevation-4">
            <div class="inner">
              <h3>265</h3>

              <p><b>Tổng đơn nhập hàng</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success elevation-4">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p><b>Tổng đơn xuất hàng</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
      </div>
      <div class=" home-table p-5">
        <center>
          <h2><b>Linh kiện</b></h2>
        </center>
        <table id="example" class="display" style="width:100%">

          <thead>
            <tr>
              <th width="20">STT</th>
              <th>Tên Linh Kiện</th>
              <th>Hình ảnh</th>
              <th>Chức năng</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011/04/25</td>
              <td>$320,800</td>
            </tr>
            <tr>
              <td>Garrett Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
              <td>2011/07/25</td>
              <td>$170,750</td>
            </tr>
            <tr>
              <td>Ashton Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
              <td>2009/01/12</td>
              <td>$86,000</td>
            </tr>
            <tr>
              <td>Cedric Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2012/03/29</td>
              <td>$433,060</td>
            </tr>
            <tr>
              <td>Airi Satou</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>33</td>
              <td>2008/11/28</td>
              <td>$162,700</td>
            </tr>
            <tr>
              <td>Brielle Williamson</td>
              <td>Integration Specialist</td>
              <td>New York</td>
              <td>61</td>
              <td>2012/12/02</td>
              <td>$372,000</td>
            </tr>
            <tr>
              <td>Herrod Chandler</td>
              <td>Sales Assistant</td>
              <td>San Francisco</td>
              <td>59</td>
              <td>2012/08/06</td>
              <td>$137,500</td>
            </tr>
            <tr>
              <td>Rhona Davidson</td>
              <td>Integration Specialist</td>
              <td>Tokyo</td>
              <td>55</td>
              <td>2010/10/14</td>
              <td>$327,900</td>
            </tr>
            <tr>
              <td>Colleen Hurst</td>
              <td>Javascript Developer</td>
              <td>San Francisco</td>
              <td>39</td>
              <td>2009/09/15</td>
              <td>$205,500</td>
            </tr>
            <tr>
              <td>Sonya Frost</td>
              <td>Software Engineer</td>
              <td>Edinburgh</td>
              <td>23</td>
              <td>2008/12/13</td>
              <td>$103,600</td>
            </tr>
            <tr>
              <td>Jena Gaines</td>
              <td>Office Manager</td>
              <td>London</td>
              <td>30</td>
              <td>2008/12/19</td>
              <td>$90,560</td>
            </tr>
            <tr>
              <td>Quinn Flynn</td>
              <td>Support Lead</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2013/03/03</td>
              <td>$342,000</td>
            </tr>
            <tr>
              <td>Charde Marshall</td>
              <td>Regional Director</td>
              <td>San Francisco</td>
              <td>36</td>
              <td>2008/10/16</td>
              <td>$470,600</td>
            </tr>
            <tr>
              <td>Haley Kennedy</td>
              <td>Senior Marketing Designer</td>
              <td>London</td>
              <td>43</td>
              <td>2012/12/18</td>
              <td>$313,500</td>
            </tr>
            <tr>
              <td>Tatyana Fitzpatrick</td>
              <td>Regional Director</td>
              <td>London</td>
              <td>19</td>
              <td>2010/03/17</td>
              <td>$385,750</td>
            </tr>
            <tr>
              <td>Michael Silva</td>
              <td>Marketing Designer</td>
              <td>London</td>
              <td>66</td>
              <td>2012/11/27</td>
              <td>$198,500</td>
            </tr>
            <tr>
              <td>Paul Byrd</td>
              <td>Chief Financial Officer (CFO)</td>
              <td>New York</td>
              <td>64</td>
              <td>2010/06/09</td>
              <td>$725,000</td>
            </tr>
            <tr>
              <td>Gloria Little</td>
              <td>Systems Administrator</td>
              <td>New York</td>
              <td>59</td>
              <td>2009/04/10</td>
              <td>$237,500</td>
            </tr>
            <tr>
              <td>Bradley Greer</td>
              <td>Software Engineer</td>
              <td>London</td>
              <td>41</td>
              <td>2012/10/13</td>
              <td>$132,000</td>
            </tr>
            <tr>
              <td>Dai Rios</td>
              <td>Personnel Lead</td>
              <td>Edinburgh</td>
              <td>35</td>
              <td>2012/09/26</td>
              <td>$217,500</td>
            </tr>
            <tr>
              <td>Jenette Caldwell</td>
              <td>Development Lead</td>
              <td>New York</td>
              <td>30</td>
              <td>2011/09/03</td>
              <td>$345,000</td>
            </tr>
            <tr>
              <td>Yuri Berry</td>
              <td>Chief Marketing Officer (CMO)</td>
              <td>New York</td>
              <td>40</td>
              <td>2009/06/25</td>
              <td>$675,000</td>
            </tr>
            <tr>
              <td>Caesar Vance</td>
              <td>Pre-Sales Support</td>
              <td>New York</td>
              <td>21</td>
              <td>2011/12/12</td>
              <td>$106,450</td>
            </tr>
            <tr>
              <td>Doris Wilder</td>
              <td>Sales Assistant</td>
              <td>Sydney</td>
              <td>23</td>
              <td>2010/09/20</td>
              <td>$85,600</td>
            </tr>
            <tr>
              <td>Angelica Ramos</td>
              <td>Chief Executive Officer (CEO)</td>
              <td>London</td>
              <td>47</td>
              <td>2009/10/09</td>
              <td>$1,200,000</td>
            </tr>
            <tr>
              <td>Gavin Joyce</td>
              <td>Developer</td>
              <td>Edinburgh</td>
              <td>42</td>
              <td>2010/12/22</td>
              <td>$92,575</td>
            </tr>
            <tr>
              <td>Jennifer Chang</td>
              <td>Regional Director</td>
              <td>Singapore</td>
              <td>28</td>
              <td>2010/11/14</td>
              <td>$357,650</td>
            </tr>
            <tr>
              <td>Brenden Wagner</td>
              <td>Software Engineer</td>
              <td>San Francisco</td>
              <td>28</td>
              <td>2011/06/07</td>
              <td>$206,850</td>
            </tr>
            <tr>
              <td>Fiona Green</td>
              <td>Chief Operating Officer (COO)</td>
              <td>San Francisco</td>
              <td>48</td>
              <td>2010/03/11</td>
              <td>$850,000</td>
            </tr>
            <tr>
              <td>Shou Itou</td>
              <td>Regional Marketing</td>
              <td>Tokyo</td>
              <td>20</td>
              <td>2011/08/14</td>
              <td>$163,000</td>
            </tr>
            <tr>
              <td>Michelle House</td>
              <td>Integration Specialist</td>
              <td>Sydney</td>
              <td>37</td>
              <td>2011/06/02</td>
              <td>$95,400</td>
            </tr>
            <tr>
              <td>Suki Burks</td>
              <td>Developer</td>
              <td>London</td>
              <td>53</td>
              <td>2009/10/22</td>
              <td>$114,500</td>
            </tr>
            <tr>
              <td>Prescott Bartlett</td>
              <td>Technical Author</td>
              <td>London</td>
              <td>27</td>
              <td>2011/05/07</td>
              <td>$145,000</td>
            </tr>
            <tr>
              <td>Gavin Cortez</td>
              <td>Team Leader</td>
              <td>San Francisco</td>
              <td>22</td>
              <td>2008/10/26</td>
              <td>$235,500</td>
            </tr>
            <tr>
              <td>Martena Mccray</td>
              <td>Post-Sales support</td>
              <td>Edinburgh</td>
              <td>46</td>
              <td>2011/03/09</td>
              <td>$324,050</td>
            </tr>
            <tr>
              <td>Unity Butler</td>
              <td>Marketing Designer</td>
              <td>San Francisco</td>
              <td>47</td>
              <td>2009/12/09</td>
              <td>$85,675</td>
            </tr>
            <tr>
              <td>Howard Hatfield</td>
              <td>Office Manager</td>
              <td>San Francisco</td>
              <td>51</td>
              <td>2008/12/16</td>
              <td>$164,500</td>
            </tr>
            <tr>
              <td>Hope Fuentes</td>
              <td>Secretary</td>
              <td>San Francisco</td>
              <td>41</td>
              <td>2010/02/12</td>
              <td>$109,850</td>
            </tr>
            <tr>
              <td>Vivian Harrell</td>
              <td>Financial Controller</td>
              <td>San Francisco</td>
              <td>62</td>
              <td>2009/02/14</td>
              <td>$452,500</td>
            </tr>
            <tr>
              <td>Timothy Mooney</td>
              <td>Office Manager</td>
              <td>London</td>
              <td>37</td>
              <td>2008/12/11</td>
              <td>$136,200</td>
            </tr>
            <tr>
              <td>Jackson Bradshaw</td>
              <td>Director</td>
              <td>New York</td>
              <td>65</td>
              <td>2008/09/26</td>
              <td>$645,750</td>
            </tr>
            <tr>
              <td>Olivia Liang</td>
              <td>Support Engineer</td>
              <td>Singapore</td>
              <td>64</td>
              <td>2011/02/03</td>
              <td>$234,500</td>
            </tr>
            <tr>
              <td>Bruno Nash</td>
              <td>Software Engineer</td>
              <td>London</td>
              <td>38</td>
              <td>2011/05/03</td>
              <td>$163,500</td>
            </tr>
            <tr>
              <td>Sakura Yamamoto</td>
              <td>Support Engineer</td>
              <td>Tokyo</td>
              <td>37</td>
              <td>2009/08/19</td>
              <td>$139,575</td>
            </tr>
            <tr>
              <td>Thor Walton</td>
              <td>Developer</td>
              <td>New York</td>
              <td>61</td>
              <td>2013/08/11</td>
              <td>$98,540</td>
            </tr>
            <tr>
              <td>Finn Camacho</td>
              <td>Support Engineer</td>
              <td>San Francisco</td>
              <td>47</td>
              <td>2009/07/07</td>
              <td>$87,500</td>
            </tr>
            <tr>
              <td>Serge Baldwin</td>
              <td>Data Coordinator</td>
              <td>Singapore</td>
              <td>64</td>
              <td>2012/04/09</td>
              <td>$138,575</td>
            </tr>
            <tr>
              <td>Zenaida Frank</td>
              <td>Software Engineer</td>
              <td>New York</td>
              <td>63</td>
              <td>2010/01/04</td>
              <td>$125,250</td>
            </tr>
            <tr>
              <td>Zorita Serrano</td>
              <td>Software Engineer</td>
              <td>San Francisco</td>
              <td>56</td>
              <td>2012/06/01</td>
              <td>$115,000</td>
            </tr>
            <tr>
              <td>Jennifer Acosta</td>
              <td>Junior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>43</td>
              <td>2013/02/01</td>
              <td>$75,650</td>
            </tr>
            <tr>
              <td>Cara Stevens</td>
              <td>Sales Assistant</td>
              <td>New York</td>
              <td>46</td>
              <td>2011/12/06</td>
              <td>$145,600</td>
            </tr>
            <tr>
              <td>Hermione Butler</td>
              <td>Regional Director</td>
              <td>London</td>
              <td>47</td>
              <td>2011/03/21</td>
              <td>$356,250</td>
            </tr>
            <tr>
              <td>Lael Greer</td>
              <td>Systems Administrator</td>
              <td>London</td>
              <td>21</td>
              <td>2009/02/27</td>
              <td>$103,500</td>
            </tr>
            <tr>
              <td>Jonas Alexander</td>
              <td>Developer</td>
              <td>San Francisco</td>
              <td>30</td>
              <td>2010/07/14</td>
              <td>$86,500</td>
            </tr>
            <tr>
              <td>Shad Decker</td>
              <td>Regional Director</td>
              <td>Edinburgh</td>
              <td>51</td>
              <td>2008/11/13</td>
              <td>$183,000</td>
            </tr>
            <tr>
              <td>Michael Bruce</td>
              <td>Javascript Developer</td>
              <td>Singapore</td>
              <td>29</td>
              <td>2011/06/27</td>
              <td>$183,000</td>
            </tr>
            <tr>
              <td>Donna Snider</td>
              <td>Customer Support</td>
              <td>New York</td>
              <td>27</td>
              <td>2011/01/25</td>
              <td>$112,000</td>
            </tr>
          </tbody>

        </table>
      </div>

    </div>


  </div>

  @include('layout.footer')
  </div>

</body>


</html>