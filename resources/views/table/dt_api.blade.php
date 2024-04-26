@extends('layouts.main')

@section('title', 'API Initialization')
@section('breadcrumb-item', 'DataTable')

@section('breadcrumb-item-active', 'API Initialization')

@section('css')
    <!-- [Page specific CSS] start -->
    <!-- data tables css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/dataTables.bootstrap5.min.css') }}">
    <!-- [Page specific CSS] end -->
@endsection

@section('content')
        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- Add rows table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Add Rows</h5>
                <small
                  >New rows can be added to a DataTable using the row.add() API method. Simply call the API function with the data for the
                  new row
                </small>
              </div>
              <div class="card-body">
                <button type="button" id="addRow" class="btn btn-primary m-b-20">+ Add Row</button>
                <div class="dt-responsive table-responsive">
                  <table id="add-row-table" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                        <th>Column 5</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                        <th>Column 5</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Add rows table end -->
          <!-- Individual Column Searching (Text Inputs) start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Individual Column Searching (Text Inputs)</h5>
                <small
                  >The searching functionality provided by DataTables is useful for quickly search through the information in the table -
                  however the search is global, and you may wish to present controls that search on specific columns.</small
                >
              </div>
              <div class="card-body">
                <div class="dt-responsive table-responsive">
                  <table id="footer-search" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
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
                        <td>2015/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2015/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2016/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2017/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2019/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2017/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2017/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2018/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2016/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2019/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2019/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2020/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2019/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2017/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2018/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2017/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2018/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2016/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2017/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2017/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2015/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2016/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2015/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2018/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2016/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2018/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2018/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2015/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2018/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2015/08/14</td>
                        <td>$163,000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Individual Column Searching (Text Inputs) end -->
          <!-- Individual Column Searching (Select Inputs) start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Individual Column Searching (Select Inputs)</h5>
                <small
                  >This example is almost identical to text based individual column example and provides the same functionality, but in this
                  case using select input controls.</small
                >
              </div>
              <div class="card-body">
                <div class="dt-responsive table-responsive">
                  <table id="footer-select" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
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
                        <td>2015/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2015/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2016/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2017/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2019/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2017/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2017/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2018/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2016/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2019/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2019/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2020/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2019/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2017/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2018/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2017/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2018/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2016/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2017/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2017/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2015/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2016/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2015/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2018/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2016/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2018/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2018/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2015/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2018/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2015/08/14</td>
                        <td>$163,000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Individual Column Searching (Select Inputs) end -->
          <!-- Row Selection (Multiple Rows) table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Row Selection (Multiple Rows)</h5>
                <small
                  >It can be useful to provide the user with the option to select rows in a DataTable. This can be done by using a click
                  event to add / remove a class on the table rows.</small
                >
              </div>
              <div class="card-body">
                <button type="button" id="row-select-btn" class="btn btn-primary m-b-20">Row Count</button>
                <div class="dt-responsive table-responsive">
                  <table id="row-select" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
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
                        <td>2015/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2015/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2016/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2017/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2019/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2017/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2017/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2018/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2016/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2019/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2019/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2020/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2019/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2017/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2018/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2017/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2018/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2016/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2017/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2017/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2015/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2016/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2015/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2018/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2016/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2018/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2018/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2015/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2018/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2015/08/14</td>
                        <td>$163,000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Row Selection (Multiple Rows) table end -->
          <!-- Row Selection And Deletion (Single Row) table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Row Selection And Deletion (Single Row)</h5>
                <small
                  >This example modifies the multiple row selection example by only allowing the selection of a single row. This is done by
                  checking to see if the row already has a selected class, and if so removing it.</small
                >
              </div>
              <div class="card-body">
                <button type="button" id="row-delete-btn" class="btn btn-danger m-b-20">Delete Rows</button>
                <div class="dt-responsive table-responsive">
                  <table id="row-delete" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
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
                        <td>2015/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2015/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2016/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2017/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2019/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2017/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2017/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2018/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2016/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2019/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2019/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2020/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2019/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2017/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2018/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2017/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2018/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2016/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2017/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2017/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2015/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2016/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2015/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2018/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2016/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2018/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2018/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2015/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2018/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2015/08/14</td>
                        <td>$163,000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Row Selection And Deletion (Single Row) table end -->
          <!-- Form Inputs table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Form Inputs</h5>
                <small
                  >In order to perform paging, ordering, searching etc, DataTables can remove rows and cells from the document (i.e. those
                  rows / cells which are not needed are not inserted into the document).</small
                >
              </div>
              <div class="card-body">
                <button type="button" id="form-input-btn" class="btn btn-primary m-b-20">Submit Form</button>
                <div class="dt-responsive table-responsive">
                  <table id="form-input-table" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Office</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>
                          <input type="text" class="form-control" id="row-1-age" name="row-1-age" value="61">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-1-position" name="row-1-position" value="System Architect">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-1-office" name="row-1-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>
                          <input type="text" class="form-control" id="row-2-age" name="row-2-age" value="63">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-2-position" name="row-2-position" value="Accountant">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-2-office" name="row-2-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo" selected="selected"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>
                          <input type="text" class="form-control" id="row-3-age" name="row-3-age" value="66">
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            id="row-3-position"
                            name="row-3-position"
                            value="Junior Technical Author"
                         >
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-3-office" name="row-3-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>
                          <input type="text" class="form-control" id="row-4-age" name="row-4-age" value="22">
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            id="row-4-position"
                            name="row-4-position"
                            value="Senior Javascript Developer"
                         >
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-4-office" name="row-4-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>
                          <input type="text" class="form-control" id="row-5-age" name="row-5-age" value="33">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-5-position" name="row-5-position" value="Accountant">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-5-office" name="row-5-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo" selected="selected"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>
                          <input type="text" class="form-control" id="row-6-age" name="row-6-age" value="61">
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            id="row-6-position"
                            name="row-6-position"
                            value="Integration Specialist"
                         >
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-6-office" name="row-6-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>
                          <input type="text" class="form-control" id="row-7-age" name="row-7-age" value="59">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-7-position" name="row-7-position" value="Sales Assistant">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-7-office" name="row-7-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>
                          <input type="text" class="form-control" id="row-8-age" name="row-8-age" value="55">
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            id="row-8-position"
                            name="row-8-position"
                            value="Integration Specialist"
                         >
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-8-office" name="row-8-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo" selected="selected"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>
                          <input type="text" class="form-control" id="row-9-age" name="row-9-age" value="39">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-9-position" name="row-9-position" value="Javascript Developer">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-9-office" name="row-9-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>
                          <input type="text" class="form-control" id="row-10-age" name="row-10-age" value="23">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-10-position" name="row-10-position" value="Software Engineer">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-10-office" name="row-10-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>
                          <input type="text" class="form-control" id="row-11-age" name="row-11-age" value="30">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-11-position" name="row-11-position" value="Office Manager">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-11-office" name="row-11-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>
                          <input type="text" class="form-control" id="row-12-age" name="row-12-age" value="22">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-12-position" name="row-12-position" value="Support Lead">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-12-office" name="row-12-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>
                          <input type="text" class="form-control" id="row-13-age" name="row-13-age" value="36">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-13-position" name="row-13-position" value="Regional Director">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-13-office" name="row-13-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>
                          <input type="text" class="form-control" id="row-14-age" name="row-14-age" value="43">
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            id="row-14-position"
                            name="row-14-position"
                            value="Senior Marketing Designer"
                         >
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-14-office" name="row-14-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>
                          <input type="text" class="form-control" id="row-15-age" name="row-15-age" value="19">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-15-position" name="row-15-position" value="Regional Director">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-15-office" name="row-15-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>
                          <input type="text" class="form-control" id="row-16-age" name="row-16-age" value="66">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-16-position" name="row-16-position" value="Marketing Designer">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-16-office" name="row-16-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>
                          <input type="text" class="form-control" id="row-17-age" name="row-17-age" value="64">
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            id="row-17-position"
                            name="row-17-position"
                            value="Chief Financial Officer (CFO)"
                         >
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-17-office" name="row-17-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>
                          <input type="text" class="form-control" id="row-18-age" name="row-18-age" value="59">
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            id="row-18-position"
                            name="row-18-position"
                            value="Systems Administrator"
                         >
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-18-office" name="row-18-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>
                          <input type="text" class="form-control" id="row-19-age" name="row-19-age" value="41">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-19-position" name="row-19-position" value="Software Engineer">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-19-office" name="row-19-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>
                          <input type="text" class="form-control" id="row-20-age" name="row-20-age" value="35">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-20-position" name="row-20-position" value="Personnel Lead">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-20-office" name="row-20-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>
                          <input type="text" class="form-control" id="row-21-age" name="row-21-age" value="30">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-21-position" name="row-21-position" value="Development Lead">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-21-office" name="row-21-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>
                          <input type="text" class="form-control" id="row-22-age" name="row-22-age" value="40">
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            id="row-22-position"
                            name="row-22-position"
                            value="Chief Marketing Officer (CMO)"
                         >
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-22-office" name="row-22-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>
                          <input type="text" class="form-control" id="row-23-age" name="row-23-age" value="21">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-23-position" name="row-23-position" value="Pre-Sales Support">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-23-office" name="row-23-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>
                          <input type="text" class="form-control" id="row-24-age" name="row-24-age" value="23">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-24-position" name="row-24-position" value="Sales Assistant">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-24-office" name="row-24-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>
                          <input type="text" class="form-control" id="row-25-age" name="row-25-age" value="47">
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            id="row-25-position"
                            name="row-25-position"
                            value="Chief Executive Officer (CEO)"
                         >
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-25-office" name="row-25-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>
                          <input type="text" class="form-control" id="row-26-age" name="row-26-age" value="42">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-26-position" name="row-26-position" value="Developer">
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-26-office" name="row-26-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Office</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Form Inputs table end -->
          <!-- Show / Hide Columns Dynamically table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Show / Hide Columns Dynamically</h5>
                <small
                  >This example shows how you can make use of the column().visible() API method to dynamically show and hide columns in a
                  table. Also included here is scrolling, just to show it enabled with this API method, although it's not required for the
                  API function to work.</small
                >
              </div>
              <div class="card-body">
                <div class="dt-responsive table-responsive">
                  <table id="show-hide-table" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
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
                        <td>2015/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2015/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2016/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2017/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2019/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2017/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2017/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2018/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2016/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2019/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2019/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2020/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2019/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2017/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2018/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2017/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2018/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2016/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2017/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2017/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2015/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2016/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2015/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2018/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2016/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2018/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2018/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2015/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2018/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2015/08/14</td>
                        <td>$163,000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Show / Hide Columns Dynamically table end -->
          <!-- Search API (Regular Expressions) table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Search API (Regular Expressions)</h5>
                <small
                  >Searching a table is one of the most common user interactions with a DataTables table, and DataTables provides a number
                  of methods for you to control this interaction.</small
                >
              </div>
              <div class="card-body">
                <div class="dt-responsive table-responsive">
                  <table class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Target</th>
                        <th>Search text</th>
                        <th>Treat as regex</th>
                        <th>Use smart search</th>
                      </tr>
                    </thead>
                    <tbody class="search-api">
                      <tr id="filter_global">
                        <td>Global search</td>
                        <td>
                          <input type="text" class="global_filter form-control" id="global_filter">
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-1" id="checkbox-p-infill-1">
                              <label for="checkbox-p-infill-1" class="cr"></label>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-2" id="checkbox-p-infill-2" checked="">
                              <label for="checkbox-p-infill-2" class="cr"></label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr id="filter_col1" data-column="0">
                        <td>Column - Name</td>
                        <td>
                          <input type="text" class="column_filter form-control" id="col0_filter">
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-3" id="checkbox-p-infill-3">
                              <label for="checkbox-p-infill-3" class="cr"></label>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-4" id="checkbox-p-infill-4" checked="">
                              <label for="checkbox-p-infill-4" class="cr"></label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr id="filter_col2" data-column="1">
                        <td>Column - Position</td>
                        <td>
                          <input type="text" class="column_filter form-control" id="col1_filter">
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-5" id="checkbox-p-infill-5">
                              <label for="checkbox-p-infill-5" class="cr"></label>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-6" id="checkbox-p-infill-6" checked="">
                              <label for="checkbox-p-infill-6" class="cr"></label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr id="filter_col3" data-column="2">
                        <td>Column - Office</td>
                        <td>
                          <input type="text" class="column_filter form-control" id="col2_filter">
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-7" id="checkbox-p-infill-7">
                              <label for="checkbox-p-infill-7" class="cr"></label>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-8" id="checkbox-p-infill-8" checked="">
                              <label for="checkbox-p-infill-8" class="cr"></label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr id="filter_col4" data-column="3">
                        <td>Column - Age</td>
                        <td>
                          <input type="text" class="column_filter form-control" id="col3_filter">
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-9" id="checkbox-p-infill-9">
                              <label for="checkbox-p-infill-9" class="cr"></label>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-10" id="checkbox-p-infill-10" checked="">
                              <label for="checkbox-p-infill-10" class="cr"></label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr id="filter_col5" data-column="4">
                        <td>Column - Start date</td>
                        <td>
                          <input type="text" class="column_filter form-control" id="col4_filter">
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-11" id="checkbox-p-infill-11">
                              <label for="checkbox-p-infill-11" class="cr"></label>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-12" id="checkbox-p-infill-12" checked="">
                              <label for="checkbox-p-infill-12" class="cr"></label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr id="filter_col6" data-column="5">
                        <td>Column - Salary</td>
                        <td>
                          <input type="text" class="column_filter form-control" id="col5_filter">
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-13" id="checkbox-p-infill-13">
                              <label for="checkbox-p-infill-13" class="cr"></label>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group d-inline">
                            <div class="checkbox checkbox-primary checkbox-fill d-inline">
                              <input type="checkbox" name="checkbox-p-in-14" id="checkbox-p-infill-14" checked="">
                              <label for="checkbox-p-infill-14" class="cr"></label>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="dt-responsive table-responsive">
                  <table id="search-api" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
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
                        <td>2015/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2015/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2016/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2017/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2019/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2017/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2017/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2018/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2016/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2019/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2019/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2020/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2019/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2017/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2018/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2017/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2018/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2016/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2017/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2017/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2015/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2016/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2015/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2018/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2016/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2018/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2018/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2015/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2018/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2015/08/14</td>
                        <td>$163,000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Search API (Regular Expressions) table end -->
        </div>
        <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <!-- datatable Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ URL::asset('build/js/plugins/dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/plugins/dataTables.bootstrap5.min.js') }}"></script>
    <script>
      // [ Add Rows ]
      var t = $('#add-row-table').DataTable();
      var counter = 1;

      $('#addRow').on('click', function () {
        t.row.add([counter + '.1', counter + '.2', counter + '.3', counter + '.4', counter + '.5']).draw(false);

        counter++;
      });

      $('#addRow').click();

      // [ Individual Column Searching (Text Inputs) ]
      $('#footer-search tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '">');
      });

      var table = $('#footer-search').DataTable();

      // [ Apply the search ]
      table.columns().every(function () {
        var that = this;

        $('input', this.footer()).on('keyup change', function () {
          if (that.search() !== this.value) {
            that.search(this.value).draw();
          }
        });
      });

      // [ Individual Column Searching (Select Inputs) ]
      $('#footer-select').DataTable({
        initComplete: function () {
          this.api()
            .columns()
            .every(function () {
              var column = this;
              var select = $('<select class="form-control form-control-sm"><option value=""></option></select>')
                .appendTo($(column.footer()).empty())
                .on('change', function () {
                  var val = $.fn.dataTable.util.escapeRegex($(this).val());

                  column.search(val ? '^' + val + '$' : '', true, false).draw();
                });

              column
                .data()
                .unique()
                .sort()
                .each(function (d, j) {
                  select.append('<option value="' + d + '">' + d + '</option>');
                });
            });
        }
      });
      var srow = $('#row-select').DataTable();

      $('#row-select tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
      });

      var drow = $('#row-delete').DataTable();

      $('#row-delete tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
          $(this).removeClass('selected');
        } else {
          drow.$('tr.selected').removeClass('selected');
          $(this).addClass('selected');
        }
      });

      $('#row-delete-btn').on('click', function () {
        drow.row('.selected').remove().draw(!1);
      });

      function format(d) {
        return (
          '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
          '<tr>' +
          '<td>Full name:</td>' +
          '<td>' +
          d.name +
          '</td>' +
          '</tr>' +
          '<tr>' +
          '<td>Extension number:</td>' +
          '<td>' +
          d.extn +
          '</td>' +
          '</tr>' +
          '<tr>' +
          '<td>Extra info:</td>' +
          '<td>And any further details here (images etc)...</td>' +
          '</tr>' +
          '</table>'
        );
      }

      // [ Form input ]
      var table = $('#form-input-table').DataTable();

      $('#form-input-btn').on('click', function () {
        var data = table.$('input, select').serialize();
        alert('The following data would have been submitted to the server: \n\n' + data.substr(0, 120) + '...');
        return false;
      });

      // [ Show-hide table js ]
      var sh = $('#show-hide-table').DataTable({
        scrollY: '200px',
        paging: false
      });

      $('a.toggle-vis').on('click', function (e) {
        e.preventDefault();

        // Get the column API object
        var column = sh.column($(this).attr('data-column'));

        // Toggle the visibility
        column.visible(!column.visible());
      });

      // [ Search API ]
      function filterGlobal() {
        $('#search-api')
          .DataTable()
          .search($('#global_filter').val(), $('#global_regex').prop('checked'), $('#global_smart').prop('checked'))
          .draw();
      }

      function filterColumn(i) {
        $('#search-api')
          .DataTable()
          .column(i)
          .search($('#col' + i + '_filter').val(), $('#col' + i + '_regex').prop('checked'), $('#col' + i + '_smart').prop('checked'))
          .draw();
      }

      $('#search-api').DataTable();

      $('input.global_filter').on('keyup click', function () {
        filterGlobal();
      });

      $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
      });
    </script>
    <!-- [Page Specific JS] end -->
@endsection