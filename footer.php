<footer class="footer-main mt-auto">
    <div class="text-center py-2 small">
        © 2026 CHAMPS VMA. All Rights Reserved.
    </div>
</footer>

<!-- image preview modal -->
<div class="modal fade" id="vmsImageModal" tabindex="-1" aria-hidden="true" style="backdrop-filter: blur(1px);">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 text-center position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 shadow-none" data-bs-dismiss="modal"></button>
                
                <img src="" id="modalPreviewImg" class="img-fluid rounded-4 shadow-lg" style="max-height: 85vh; width: auto;">
                
                <div id="modalCaption" class="text-white mt-3 fw-bold small"></div>
            </div>
        </div>
    </div>
</div>


<script src="./script.js"></script>
<script src="../script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Modal image preview js code -->
<script>
    document.addEventListener('click', function (e) {
    // Check agar click ki gayi cheez 'preview-trigger' class rakhti hai
    if (e.target.classList.contains('preview-trigger')) {
        const imageSrc = e.target.src; // Image ka path uthayein
        const imageAlt = e.target.alt; // Image ka caption uthayein
        
        // Modal ke andar image aur text set karein
        document.getElementById('modalPreviewImg').src = imageSrc;
        document.getElementById('modalCaption').innerText = imageAlt;
        
        // Modal ko show karein (Bootstrap 5)
        var myModal = new bootstrap.Modal(document.getElementById('vmsImageModal'));
        myModal.show();
    }
});
</script>

<!-- Input Select2 kely Multiple input ko select karna hai -->
<script>
$(document).ready(function() {
    $('#driverSelect').select2({
        placeholder: "Select or type driver names",
        allowClear: true,
        width: '100%',
        closeOnSelect: false // Is se aik ke baad aik select karna asan hoga
    });
});
</script>

<!-- Dashboard Summery -->
 <script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Main Line/Bar Chart (Utilization)
    const ctxMain = document.getElementById('mainChart').getContext('2d');
    new Chart(ctxMain, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Trips Completed',
                data: [65, 59, 80, 81, 56, 95],
                borderColor: '#4361ee',
                backgroundColor: 'rgba(67, 97, 238, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });

    // 2. Status Donut Chart (Fleet Status)
    const ctxStatus = document.getElementById('statusChart').getContext('2d');
    new Chart(ctxStatus, {
        type: 'doughnut',
        data: {
            labels: ['Active', 'In Maintenance', 'Idle'],
            datasets: [{
                data: [70, 15, 15],
                backgroundColor: ['#2ec4b6', '#e71d36', '#ff9f1c'],
                borderWidth: 0
            }]
        },
        options: {
            plugins: { legend: { position: 'bottom' } },
            cutout: '0%'
        }
    });
});
</script>

<!-- Vehicle Managment ke Summery graph and Chart -->
<script>
    // --- Performance Line Chart ---
const ctxLine = document.getElementById('performanceLineChart').getContext('2d');

// Create Gradient
const chartGradient = ctxLine.createLinearGradient(0, 0, 0, 300);
chartGradient.addColorStop(0, 'rgba(67, 97, 238, 0.2)');
chartGradient.addColorStop(1, 'rgba(67, 97, 238, 0)');

new Chart(ctxLine, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Efficiency Rate',
            data: [65, 78, 72, 85, 80, 92],
            borderColor: '#4361ee',
            borderWidth: 3,
            fill: true,
            backgroundColor: chartGradient,
            tension: 0.4, // Curvy lines for professional look
            pointBackgroundColor: '#fff',
            pointBorderColor: '#4361ee',
            pointRadius: 4,
            pointHoverRadius: 6
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
            y: {
                beginAtZero: true,
                grid: { borderDash: [5, 5], color: '#f0f0f0', drawBorder: false },
                ticks: { color: '#94a3b8', font: { size: 11 } }
            },
            x: {
                grid: { display: false },
                ticks: { color: '#94a3b8', font: { size: 11 } }
            }
        }
    }
});

// --- Professional Donut Chart ---
const ctxDonut = document.getElementById('statusDonutChart').getContext('2d');
new Chart(ctxDonut, {
    type: 'doughnut',
    data: {
        labels: ['Active', 'In Maintenance', 'Idle'],
        datasets: [{
            data: [70, 15, 15],
            backgroundColor: ['#2ec4b6', '#e71d36', '#ff9f1c'],
            hoverBackgroundColor: ['#26a69a', '#d32f2f', '#ffa000'],
            borderWidth: 0,
            weight: 0.5
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '40%', // Makes it a slim modern donut
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: '#1e293b',
                padding: 12,
                titleFont: { size: 14 },
                bodyFont: { size: 13 },
                displayColors: true
            }
        },
        animation: { animateScale: true, animateRotate: true }
    }
});
</script>


<!-- Incident & Intervention Summery  -->
 <script>
    // 1. Bar Chart: Monthly Incidents
const ctxIncBar = document.getElementById('incidentBarChart').getContext('2d');
new Chart(ctxIncBar, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
        datasets: [{
            label: 'Total Incidents',
            data: [12, 19, 8, 15, 22, 10, 14, 17],
            backgroundColor: '#4361ee', // Primary Theme Color
            borderRadius: 8,
            barThickness: 20
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
            y: { grid: { borderDash: [5, 5], drawBorder: false } },
            x: { grid: { display: false } }
        }
    }
});

// 2. Polar Area Chart: Category breakdown
const ctxIncPolar = document.getElementById('incidentPolarChart').getContext('2d');
new Chart(ctxIncPolar, {
    type: 'polarArea',
    data: {
        labels: ['Accident', 'Breakdown', 'Haulage', 'Detention', 'Misconduct'],
        datasets: [{
            data: [5, 14, 22, 3, 9],
            backgroundColor: [
                'rgba(231, 29, 54, 0.7)',  // Accident (Red)
                'rgba(255, 159, 28, 0.7)', // Breakdown (Orange)
                'rgba(46, 196, 182, 0.7)', // Haulage (Teal)
                'rgba(1, 22, 39, 0.7)',    // Detention (Dark)
                'rgba(67, 97, 238, 0.7)'   // Misconduct (Blue)
            ],
            borderWidth: 2,
            borderColor: '#fff'
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: { usePointStyle: true, padding: 15, font: { size: 11 } }
            }
        },
        scales: {
            r: { ticks: { display: false }, grid: { color: '#f0f0f0' } }
        }
    }
});
 </script>



<!-- Data table script -->
<script>
    $(document).ready(function() {
        // Pehli Table (Vehicle Detail)
        $('#myAssetsTable').DataTable({
            "pageLength": 5,
            "language": {
                "search": "",
                "searchPlaceholder": "Search Assets..."
            }
        });

        // Doosri Table (Driver Detail)
        $('#tripsTable').DataTable({
            "pageLength": 5,
            "order": [[0, "desc"]], // Newest trips pehle dikhaye
            "language": {
                "search": "",
                "searchPlaceholder": "Search trips, routes or IDs..."
            }
        });

        //driver mate table
         $('#driverTable').DataTable({
         "pageLength": 5,
            "order": [[0, "desc"]], // Newest trips pehle dikhaye
            "language": {
                "search": "",
                "searchPlaceholder": "Search trips, routes or IDs..."
            }
    });


        //trip & route log table
        $('#destinationLogTable').DataTable({
            "pageLength": 10,
            "scrollX": true, // Zyada columns ki wajah se horizontal scroll on kiya hai
            "order": [[0, "desc"]], // Newest Trip ID top par rahegi
            "language": {
                "search": "",
                "searchPlaceholder": "Search trips & routes"
            },
            
        });

        //waybill table
        $('#waybillTable').DataTable({
            "pageLength": 5,
            "order": [[1, "desc"]], // Date ke mutabiq sort karega (Latest first)
            "language": {
                "search": "",
                "searchPlaceholder": "Search Waybills..."
            },
           
        });

        //Service maintenance log table
        $('#maintenanceLogTable').DataTable({
            "pageLength": 5,
            "responsive": true,
            "order": [[0, "desc"]], // Newest service record sabse upar
            "language": {
                "search": "",
                "searchPlaceholder": "Search providers, service types..."
            },
           
        });

        //impound log table
        $('#impoundmentTable').DataTable({
            "pageLength": 5,
            "order": [[4, "desc"]], // Date ke mutabiq sort karega
            "language": {
                "search": "",
                "searchPlaceholder": "Search by Vehicle, Driver or Authority..."
            },
           
        });

        //breakdown log table
        $('#breakdownTable').DataTable({
            "pageLength": 5,
            "order": [[4, "desc"]], // Reported At time ke mutabiq sort
            "language": {
                "search": "",
                "searchPlaceholder": "Search by Vehicle, Issue or Location..."
            },
            
        });

        //illegal detention log table
        $('#detentionTable').DataTable({
            "pageLength": 5,
            "order": [[0, "desc"]], // Case ID ke mutabiq sorting
            "language": {
                "search": "",
                "searchPlaceholder": "Search Case ID, Vehicle or Agency..."
            },
            
        });

        //accident log table
        $('#accidentTable').DataTable({
            "pageLength": 5,
            "order": [[0, "desc"]], // Latest Accident ID pehle dikhaye
            "language": {
                "search": "",
                "searchPlaceholder": "Search accidents, vehicles or drivers..."
            },
           
        });

        //vehicle bugged-down log table
        $('#recoveryTable').DataTable({
            "pageLength": 5,
            "order": [[0, "desc"]], // Latest date pehle dikhaye
            "language": {
                "search": "",
                "searchPlaceholder": "Search recovery logs..."
            },
           
        });

        //route diversion log table
        $('#recoveryLogTable').DataTable({
            "pageLength": 5,
            "order": [[0, "desc"]], // Latest recovery date sabse upar dikhayi degi
            "language": {
                "search": "",
                "searchPlaceholder": "Search recovery cause or vehicle..."
            },
           
        });

        //driver misconduct log table
        $('#recoveryStabilityTable').DataTable({
            "pageLength": 5,
            "order": [[0, "desc"]], 
            "language": {
                "search": "",
                "searchPlaceholder": "Search logs, causes or stability..."
            },
           
        });

        //illegal Haulage log table
        $('#discoveryLogTable').DataTable({
            "pageLength": 5,
            "order": [[0, "desc"]], 
            "language": {
                "search": "",
                "searchPlaceholder": "Search by Officer, Driver or Team..."
            },
            
        });

        //goods inspection log table
        $('#inspectionTable').DataTable({
            "pageLength": 10,       // Ek page par kitni rows dikhani hain
            "ordering": true,       // Sorting enable
            "responsive": true,     // Mobile friendly
            "language": {
                "search": "Search Record:", // Search label change karne ke liye
                "paginate": {
                    "next": '<i class="fas fa-chevron-right"></i>',
                    "previous": '<i class="fas fa-chevron-left"></i>'
                }
            },
           
        });

        //vehicle tracking log table
        $('#trackingTable').DataTable({
       "pageLength": 5, // Default rows
        "ordering": true,
        "language": {
            "search": "_INPUT_",
            "searchPlaceholder": "Search tracking data..."
        },
    });

    //asset enumeration log table
    $('#assetTable').DataTable({
        "pageLength": 5, // Default rows
        "ordering": true,
        "language": {
            "search": "_INPUT_",
            "searchPlaceholder": "Search Assets..."
        },
       
    });


    // Report and Analytics Page ki sari tables ko ek sath initialize karein
    $('.global-datatable').each(function() {
        $(this).DataTable({
            "pageLength": 5,
            "ordering": true,
            "info": true,
           
            "language": {
                "search": "",
                "searchPlaceholder": "Search records..."
            }
        });
    });


   

   
    });
</script>
</body>
</html>