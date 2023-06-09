<?php
require_once('../template/header.php');
?>


<!-- AREA CONTENT START -->

<div class="content-dashboard">
    <div class="container">
        <div class="row box-table-header">
            <div class="row-dashboard">
                <h4>Laporan Kinerja Produksi</h4>
            </div>
        </div>

        <div class="row box-table">
            <div class="col">
                <div class="card">
                    <h5 class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTableOne" aria-expanded="true" aria-controls="collapseTableOne" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i> Table Information
                        </a>
                    </h5>

                    <div id="collapseTableOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                            <div class="col-dashboard">
                                <table id="produksi-information" class="table table-bordered table-success table-dashboard">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)">Kinerja Produksi</th>
                                            <th onclick="sortTable(1)">Unit 1</th>
                                            <th onclick="sortTable(2)">Unit 2</th>
                                            <th onclick="sortTable(3)">Unit 3</th>
                                            <th onclick="sortTable(4)">Pencapaian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Daily</td>
                                            <td>1200</td>
                                            <td>1230</td>
                                            <td>1024</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Monthly</td>
                                            <td colspan="3">103634</td>
                                            <td>70%</td>
                                        </tr>
                                        <tr>
                                            <td>Yearly</td>
                                            <td colspan="3">1139974</td>
                                            <td>73%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-dashboard">
                                <table id="example" class="table table-bordered table-success table-dashboard">
                                    <thead>
                                        <tr>
                                            <th>Satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MWh</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseGraphOne" aria-expanded="true" aria-controls="collapseGraphOne" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i> Graph Information
                        </a>
                    </h5>

                    <div id="collapseGraphOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                            <!-- <div id="container-graph" style = "width: 550px; height: 400px; margin: 0 auto">

                                </div> -->
                            <canvas id="produksi-grafik" width="750" height="480" class="graph-table-dashboard">Canvas
                                is not
                                supported</canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row box-table-header">
            <div class="row-dashboard">
                <h4>Laporan Kondisi Hidrologi (Discharge)</h4>
            </div>
        </div>

        <div class="row box-table">
            <div class="col">
                <div class="card">
                    <h5 class="card-header" role="tab" id="headingTwo">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTableTwo" aria-expanded="true" aria-controls="collapseTableTwo" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i> Table Information
                        </a>
                    </h5>

                    <div id="collapseTableTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                            <div class="col-dashboard">
                                <table id="discharge-information" class="table table-bordered table-success table-dashboard">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)">Kondisi Hidrologi (Discharge)</th>
                                            <th onclick="sortTable(1)">Rata - Rata Unit 1</th>
                                            <th onclick="sortTable(2)">Rata - Rata Unit 2</th>
                                            <th onclick="sortTable(3)">Total Rata - Rata</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Daily</td>
                                            <td>55.00</td>
                                            <td>45.46</td>
                                            <td>58.76</td>
                                        </tr>
                                        <tr>
                                            <td>Monthly</td>
                                            <td>56.00</td>
                                            <td>51.32</td>
                                            <td>60.85</td>
                                        </tr>
                                        <tr>
                                            <td>Yearly</td>
                                            <td>55.5</td>
                                            <td>48.39</td>
                                            <td>59.805</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-dashboard">
                                <table id="example" class="table table-bordered table-success table-dashboard">
                                    <thead>
                                        <tr>
                                            <th>Satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>m<sup>3</sup>/s</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header" role="tab" id="headingTwo">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseGraphTwo" aria-expanded="true" aria-controls="collapseGraphTwo" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i> Graph Information
                        </a>
                    </h5>

                    <div id="collapseGraphTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                            <canvas id="discharge-grafik" width="750" height="480" class="graph-table-dashboard">Canvas
                                is not
                                supported</canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row box-table-header">
            <div class="row-dashboard">
                <h4>Laporan Kondisi Hidrologi (Water Level)</h4>
            </div>
        </div>

        <div class="row box-table">
            <div class="col">
                <div class="card">
                    <h5 class="card-header" role="tab" id="headingThree">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTableThree" aria-expanded="true" aria-controls="collapseTableThree" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i> Table Information
                        </a>
                    </h5>

                    <div id="collapseTableThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-body">
                            <div class="col-dashboard">
                                <table id="water-information" class="table table-bordered table-success table-dashboard">
                                    <thead>
                                        <tr>
                                            <th>Kondisi Hidrologi (Water Level)</th>
                                            <th onclick="sortTable(0)">Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Daily</td>
                                            <td>903.50</td>
                                        </tr>
                                        <tr>
                                            <td>Monthly</td>
                                            <td>905.43</td>
                                        </tr>
                                        <tr>
                                            <td>Yearly</td>
                                            <td>903.9</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-dashboard">
                                <table id="example" class="table table-bordered table-success table-dashboard">
                                    <thead>
                                        <tr>
                                            <th>Satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>m</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header" role="tab" id="headingThree">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseGraphThree" aria-expanded="true" aria-controls="collapseGraphThree" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i> Graph Information
                        </a>
                    </h5>

                    <div id="collapseGraphThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-body">
                            <canvas id="water-grafik" width="750" height="480" class="graph-table-dashboard">Canvas
                                is
                                not
                                supported</canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row box-table-header">
            <div class="row-dashboard">
                <h4>Laporan Pemeliharaan Sungai</h4>
            </div>
        </div>

        <div class="row box-table">
            <div class="col">
                <div class="card">
                    <h5 class="card-header" role="tab" id="headingFour">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTableFour" aria-expanded="true" aria-controls="collapseTableFour" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i> Table Information
                        </a>
                    </h5>

                    <div id="collapseTableFour" class="collapse show" role="tabpanel" aria-labelledby="headingFour">
                        <div class="card-body">
                            <div class="col-dashboard">
                                <table id="river-information" class="table table-bordered table-success table-dashboard">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)" rowspan="2">Pemeliharaan Sungai</th>
                                            <th onclick="sortTable(1)" colspan="2">Trashboom 1</th>
                                            <th onclick="sortTable(2)" colspan="2">Trashboom 2</th>
                                            <th onclick="sortTable(3)" colspan="2">Intake Rack</th>
                                            <th onclick="sortTable(4)" colspan="2">Spiral Case</th>
                                        </tr>
                                        <tr>
                                            <td>Volume (m<sup>3</sup>)</td>
                                            <td>Pencapaian (%)</td>
                                            <td>Volume (m<sup>3</sup>)</td>
                                            <td>Pencapaian (%)</td>
                                            <td>Volume (m<sup>3</sup>)</td>
                                            <td>Pencapaian (%)</td>
                                            <td>Volume (m<sup>3</sup>)</td>
                                            <td>Pencapaian (%)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Plastik</td>
                                            <td>2</td>
                                            <td>76</td>
                                            <td>16</td>
                                            <td>90</td>
                                            <td>1</td>
                                            <td>45</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Eceng Gondok</td>
                                            <td>2</td>
                                            <td>34</td>
                                            <td>10</td>
                                            <td>50</td>
                                            <td>1</td>
                                            <td>45</td>
                                            <td>5</td>
                                            <td>84</td>
                                        </tr>
                                        <tr>
                                            <td>Lain - Lain</td>
                                            <td>3</td>
                                            <td>56</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>75</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-dashboard">
                                <table id="example" class="table table-bordered table-success table-dashboard">
                                    <thead>
                                        <tr>
                                            <th>Satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>m</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header" role="tab" id="headingFour">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseGraphFour" aria-expanded="true" aria-controls="collapseGraphFour" class="d-block">
                            <i class="fa fa-chevron-down pull-right"></i> Graph Information
                        </a>
                    </h5>

                    <div id="collapseGraphFour" class="collapse show" role="tabpanel" aria-labelledby="headingFour">
                        <div class="card-body">
                            <canvas id="river-grafik" width="750" height="480" class="graph-table-dashboard">Canvas
                                is
                                not
                                supported</canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- AREA CONTENT END -->



<script type="text/javascript">
    var date = new Date().getFullYear();

    document.getElementById("get-year").innerHTML = date;

    var misParam = {
        miMargen: 0.80,
        separZonas: 0.05,
        tituloGraf: "Laporan Produksi",
        tituloEjeX: "Periode",
        tituloEjeY: "Jumlah Unit",
        nLineasDiv: 10,
        mysColores: [
            ["rgba(93,18,18,1)", "rgba(196,19,24,1)"], //red
            ["rgba(171,115,51,1)", "rgba(251,163,1,1)"], //yellow
        ],
        anchoLinea: 2,
    };

    obtener_datos_tabla_convertir_en_array('produksi-information', graficarBarras, 'produksi-grafik', '750', '480', misParam, true);


    var misParam_two = {
        miMargen: 0.80,
        separZonas: 0.05,
        tituloGraf: "Laporan Produksi",
        tituloEjeX: "Periode",
        tituloEjeY: "Jumlah Unit",
        nLineasDiv: 10,
        mysColores: [
            ["rgba(93,18,18,1)", "rgba(196,19,24,1)"], //red
            ["rgba(171,115,51,1)", "rgba(251,163,1,1)"], //yellow
        ],
        anchoLinea: 2,
    };

    obtener_datos_tabla_convertir_en_array('discharge-information', graficarBarras, 'discharge-grafik', '750', '480', misParam_two, true);

    var misParam_two = {
        miMargen: 0.80,
        separZonas: 0.05,
        tituloGraf: "Laporan",
        tituloEjeX: "Periode",
        tituloEjeY: "Jumlah Unit",
        nLineasDiv: 10,
        mysColores: [
            ["rgba(93,18,18,1)", "rgba(196,19,24,1)"], //red
            ["rgba(171,115,51,1)", "rgba(251,163,1,1)"], //yellow
        ],
        anchoLinea: 2,
    };

    obtener_datos_tabla_convertir_en_array('discharge-information', graficarBarras, 'discharge-grafik', '750', '480', misParam_two, true);


    var misParam_three = {
        miMargen: 0.80,
        separZonas: 0.05,
        tituloGraf: "Laporan",
        tituloEjeX: "Periode",
        tituloEjeY: "Level",
        nLineasDiv: 10,
        mysColores: [
            ["rgba(93,18,18,1)", "rgba(196,19,24,1)"], //red
            ["rgba(171,115,51,1)", "rgba(251,163,1,1)"], //yellow
        ],
        anchoLinea: 2,
    };

    obtener_datos_tabla_convertir_en_array('water-information', graficarBarras, 'water-grafik', '750', '480', misParam_three, true);

    var misParam_four = {
        miMargen: 0.80,
        separZonas: 0.05,
        tituloGraf: "Laporan",
        tituloEjeX: "Kategori",
        tituloEjeY: "Total",
        nLineasDiv: 10,
        mysColores: [
            ["rgba(93,18,18,1)", "rgba(196,19,24,1)"], //red
            ["rgba(171,115,51,1)", "rgba(251,163,1,1)"], //yellow
        ],
        anchoLinea: 2,
    };

    obtener_datos_tabla_convertir_en_array('river-information', graficarBarras, 'river-grafik', '750', '480', misParam_three, true);

    $(document).ready(function() {
        var data = {
            table: 'produksi-information'
        };
        var chart = {
            type: 'column'
        };
        var title = {
            text: 'Data extracted from a HTML table in the page'
        };
        var yAxis = {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        };
        var tooltip = {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        };
        var credits = {
            enabled: false
        };
        var json = {};
        json.chart = chart;
        json.title = title;
        json.data = data;
        json.yAxis = yAxis;
        json.credits = credits;
        json.tooltip = tooltip;
        $('#container-graph').highcharts(json);
    });
</script>

<?php
require_once('../template/footer.php');
?>
