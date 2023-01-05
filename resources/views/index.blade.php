@extends('layout.utama')

{{-- css --}}
@section('css')
    <link rel="stylesheet" href="css/style.css">
@endsection

{{-- js --}}
@section('js')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="js/script.js" ></script>
@endsection

{{-- main --}}
@section('main')
<div class="pilihan">
  <!-- 1 -->
<div class="pilihan1">
    
    <div class="kiri me-3">
      <a href="#"><i class="bi bi-file-earmark fs-1"></i></a>
    </div>
    <div class="kanan"><a href="#">Today Invoices<br>+ 0</a></div>
  
  </div>
  <!-- 2 -->
  <div class="pilihan2">
    
    <div class="kiri me-3">
      <a href=""><i class="bi bi-cart fs-1"></i></i></a>
    </div>
    <div class="kanan"><a href="">Today Sales<br><i class="bi bi-arrow-up"></i> 0.00$</a></div>
  
  </div>
  <!-- 3 -->
  <div class="pilihan3">
    
    <div class="kiri me-3">
      <a href=""><i class="bi bi-journal fs-1"></i></a>
    </div>
    <div class="kanan"><a href="">This Month Invoices<br><i class="bi bi-arrow-up"></i> 1</a></div>
  
  </div>
  <!-- 4 -->
  <div class="pilihan4">
    
    <div class="kiri me-3">
      <a href=""><i class="bi bi-handbag fs-1 "></i></a>
    </div>
    <div class="kanan"><a href="">This Mouth Sales<br><i class="bi bi-arrow-up"></i> 108.00$</a></div>
  
  </div>

  
    </div>
</div>


    <!-- informasi -->
    <div class="informasi ">
        <div class="grafik shadow ">
          <div class="judul">
            <h1>GRAPHICAL PRESENTATION OF INVOICES AND SALES DONE IN LAST 30 DAYS</h1>
            <div class="aksi " style="margin-top:-5px" ><a href="#" class="me-2 text-secondary"><i class="bi bi-arrow-clockwise fs-5"  ></i></a><a class="text-secondary" href="#"><i class="bi bi-fullscreen  "></i></a></div>
          </div>
          <div style="width:100%" class="mt-3" id="loh_div"></div>

            <div class="detail mt-3 d-flex  mb-3" style="justify-content: space-between;">

              <div class="todaySales me-2" style="width:18%" >
                <h5 style="color:skyblue;" >0.00$</h5>
                <h6 style="margin-top:-10px"  >Today Sales</h6>
                  <div class="progress" style="width:100%" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 0%;background-color:skyblue"></div>
                  </div>
              </div>

              <div class="todaySales me-2" style="width:18%" >
                <h5 style="color:mediumseagreen;" >0.00$</h5>
                <h6 style="margin-top:-10px"  >Today Income</h6>
                  <div class="progress" style="width:100%" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 0%;background-color:mediumseagreen"></div>
                  </div>
              </div>

              <div class="todaySales me-2" style="width:18%" >
                <h5 style="color:orange;" >0.00$</h5>
                <h6 style="margin-top:-10px"  >Today Expenses</h6>
                  <div class="progress" style="width:100%" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 0%;background-color:orange"></div>
                  </div>
              </div>

              <div class="todaySales me-2" style="width:18%" >
                <h5 style="color:purple;" >10,800$</h5>
                <h6 style="margin-top:-10px"  >Today Revenue</h6>
                  <div class="progress" style="width:100%" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 40%;background-color:purple"></div>
                  </div>
              </div>

             
              

            </div>

        </div>





        <div class="langganan shadow">
          <div class="judul">
            <h1>RECENT BUYERS</h1>
            <div class="aksi " style="margin-top:-5px" ><a href="#" class="me-2 text-secondary"><i class="bi bi-arrow-clockwise fs-5"  ></i></a><a class="text-secondary" href="#"><i class="bi bi-fullscreen  "></i></a></div>
          </div>
    
          <div class="users mt-3 mx-2">
            <div class="kiri">
              <img src="img/imgUpdate.jpg" class="fotoUsers rounded-circle me-2" >
              <div class="user">
                <h6>Walk in</h6>
                <a href="#" class="text-white text-decoration-none text-center p-1 rounded"  style="font-size:12px;background-color:green" >Paid</a>
              </div>
            </div>
            <div class="kanan text-secondary">108.00 $</div>
          </div>
          <div class="garis mt-2"></div>
        </div>
    </div>

    <!-- table & income -->
    <div class="informasi2">

      <div class="table shadow">

        <div class="judul">
            <h1 class="text-secondary" > RECENT INVOICES</h1>
            <div class="aksi">
                <button class="AddSale" > Add Sale </button>
                <button class="Manage" > Manage Invoices </button>
            </div>
        </div>

        
        <table class="table mt-3" style="width:100%;border-top:1px solid rgba(205, 205, 205,0.5)" >
          <thead>
            <tr  >
              <th scope="col">Invoice</th>
              <th scope="col">Customer</th>
              <th scope="col">Invoice Daue Date</th>
              <th scope="col">Amount</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody style="font-size:13px" >
            <tr>
              <th style="font-weight:bold;color:mediumseagreen" >INV #1</th>
              <td>Walk In</td>
              <td>20-03-2020</td>
              <td>108.00 $</td>
              <td><button class="text-light rounded p-1 ms-2" style="background-color:green;border:none" >Paid</button></td>
            </tr>
          </tbody>
        </table>


      </div>

      




      <div class="income shadow">
        <h1>Income vs Expenses</h1>
        <div id="donut_single" style="width:100%;height:400px"></div>
      </div>

    </div>

    <!-- informasi3 -->

    <div class="informasi3">

        <div class="recent shadow">
            <div class="judul">
              <h1 class="text-secondary" >RECENT <button style="border:0;background-color:mediumseagreen" class="ms-1 text-light rounded p-1" >TRANSCTIONS</button></h1>
              <a href="#" class="text-secondary" style="margin-top:-10px" ><i class="bi bi-arrow-clockwise fs-5"  ></i></a>
            </div>

            <table class="table mt-3 text-center" style="width:100%;border-top:1px solid rgba(205, 205, 205,0.5)" >
          <thead>
            <tr  >
              <th scope="col">Payment Date</th>
              <th scope="col">Transaction</th>
              <th scope="col">Debit</th>
              <th scope="col">Credit</th>
              <th scope="col">Peyment Method</th>
            </tr>
          </thead>
          <tbody style="font-size:13px" >
            <tr>
              <th style="font-weight:bold;color:mediumseagreen" >21-03-2020 #1</th>
              <td>Default Account</td>
              <td>0.00$</td>
              <td>108.00$</td>
              <td>Cash</td>
            </tr>
          </tbody>
        </table>

        </div>


        <div class="stock shadow">
          <h1 class="text-secondary text-center fw-bold " style="font-size:15px" >Stock Alert </h1>
          <table class="table-dark shadow-sm table-striped table mt-3 text-center" style="width:100%;border-top:1px solid rgba(205, 205, 205,0.5)" >
            <thead>
              <tr style="font-size:13px" >
                <th scope="col">Alert <i class="bi bi-arrow-down-up"></i></th>
                <th scope="col">Alert <i class="bi bi-arrow-down-up"></i></th>
                <th scope="col">Alert <i class="bi bi-arrow-down-up"></i></th>
                <th scope="col">Alert <i class="bi bi-arrow-down-up"></i></th>
              </tr>
            </thead>
            <tbody style="font-size:13px" >
              <tr>
                <th style="font-weight:bold;color:mediumseagreen" >21-03-2020 #1</th>
                <td>Default Account</td>
                <td>0.00$</td>
                <td>108.00$</td>
              </tr>
            </tbody>
          </table>
  
        </div>

    </div>

    <!-- informasi4 -->

    <div class="informasi4">

      <div class="cash shadow ">
        <h1 class="fs-6 fw-bold text-secondary" >Cash Flow</h1>
        <h1 class="fs-6 text-secondary" >GRAPHICAL PRESENTAION OF CashFlow DONE IN LAST 30 DAYS </h1>

        <div class="aksi">
          <button class="income ">Income</button>
          <button class="expenses" >Expenses</button>
        </div>

        <div style="width:100%" class="mt-3" id="chart_div"></div>

        
      </div>





      <div class="task shadow " style="height:430px" >
         <h1 class="fw-bold fs-6 text-secondary text-center mb-3" >TASK MANAGER</h1>
         <div class="btn-group mt-3 mb-3 d-flex justify-content-center" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-primary">Copy</button>
            <button type="button" class="btn btn-primary">Excel</button>
            <button type="button" class="btn btn-primary">CSV</button>
            <button type="button" class="btn btn-primary">PDF</button>
            <button type="button" class="btn btn-primary">Print</button>
          </div>
          <div class="input">
            <form action="">
            <div class="mb-3">
              <label for="show" class="form-label text-primary">Show Entries</label>
              <input type="number" class="form-control" id="show" placeholder="Number">
            </div>
            <div class="mb-3">
              <label for="search" class="form-label text-primary">Search</label>
              <input type="search" class="form-control" id="search" placeholder="Search">
            </div>
              </form>

              <table class="table-primary shadow-sm table-striped table mt-3 text-center" style="width:100%;border-top:1px solid rgba(205, 205, 205,0.5)" >
          <thead>
            <tr style="font-size:13px" >
              <th scope="col">Task <i class="bi bi-arrow-down-up"></i></th>
              <th scope="col">Start date <i class="bi bi-arrow-down-up"></i></th>
              <th scope="col">Task Due Date <i class="bi bi-arrow-down-up"></i></th>
              <th scope="col">Task Status <i class="bi bi-arrow-down-up"></i></th>
            </tr>
          </thead>
          <tbody style="font-size:13px" >
            <tr>
              <th style="font-weight:bold;color:mediumseagreen" >21-03-2020 #1</th>
              <td>Default Account</td>
              <td>0.00$</td>
              <td>108.00$</td>
            </tr>
          </tbody>
        </table>

            <div class="aksi">
               <p class="mt-3" >Showing 0 to 0 of 0 entries </p>
               <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <button type="button" class="btn btn-danger">Left</button>
                  <button type="button" class="btn btn-success">Right</button>
                </div>
            </div>
          </div>
      </div>

    </div>

@endsection