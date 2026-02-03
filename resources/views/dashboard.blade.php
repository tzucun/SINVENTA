@extends('layouts.app')

@section('content')

    <h2 id="judulhalaman">Dashboard Inventaris Telkom</h2>

    <div class="dashboard-flex" style="gap:20px;">
        <div class="card-stat" style="background:#d00000; flex:1; min-width:200px;">
            <h3>Total Alker</h3>
            <p>{{ $totalAlker }}</p>
        </div>

        <div class="card-stat" style="background:#b91c1c; flex:1; min-width:200px;">
            <h3>Total Salker</h3>
            <p>{{ $totalSalker }}</p>
        </div>

        <div class="card-stat" style="background:#16a34a; flex:1; min-width:200px;">
            <h3>Kondisi Alker</h3>
            <p>Baik: {{ $totalBaikAlker }}</p>
            <p>Rusak: {{ $totalRusakAlker }}</p>
            <p>Perbaikan: {{ $totalPerbaikanAlker }}</p>
        </div>

        <div class="card-stat" style="background:#10b981; flex:1; min-width:200px;">
            <h3>Kondisi Salker</h3>
            <p>Baik: {{ $totalBaikSalker }}</p>
            <p>Rusak: {{ $totalRusakSalker }}</p>
            <p>Perbaikan: {{ $totalPerbaikanSalker }}</p>
        </div>
    </div>

    <div class="dashboard-flex">
        <div class="chart-card" style="flex:1; min-width:300px;">
            <h3>Kategori Alker</h3>
            <canvas id="chartKategoriAlker"></canvas>
        </div>

        <div class="chart-card" style="flex:1; min-width:300px;">
            <h3>Jenis Salker</h3>
            <canvas id="chartJenisSalker"></canvas>
        </div>
    </div>

    <div class="chart-card">
        <h3>Alker Terbaru</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Kondisi</th>
                    <th>Lokasi</th>
                    <th>Terakhir Kalibrasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentAlker as $index => $alker)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $alker->kode_alker }}</td>
                    <td>{{ $alker->nama_alker }}</td>
                    <td>{{ $alker->kategori }}</td>
                    <td>{{ $alker->jumlah }}</td>
                    <td>{{ $alker->kondisi }}</td>
                    <td>{{ $alker->lokasi }}</td>
                    <td>
                        {{ $alker->terakhir_dikalibrasi 
                            ? date('d-m-Y', strtotime($alker->terakhir_dikalibrasi)) 
                            : '-' }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="chart-card">
        <h3>Salker Terbaru</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Kondisi</th>
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentSalker as $index => $salker)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $salker->kode_salker }}</td>
                    <td>{{ $salker->nama_salker }}</td>
                    <td>{{ $salker->jenis }}</td>
                    <td>{{ $salker->jumlah }}</td>
                    <td>{{ $salker->kondisi }}</td>
                    <td>{{ $salker->lokasi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctxAlker = document.getElementById('chartKategoriAlker').getContext('2d');
    new Chart(ctxAlker, {
        type: 'pie',
        data: {
            labels: {!! json_encode($kategoriAlker->keys()) !!},
            datasets: [{
                data: {!! json_encode($kategoriAlker->values()) !!},
                backgroundColor: ['#0B12CD', '#123A5E', '#1E5FA8', '#4A90E2', '#A7C7F9']
            }]
        },
        options: { responsive: true }
    });

    const ctxSalker = document.getElementById('chartJenisSalker').getContext('2d');
    new Chart(ctxSalker, {
        type: 'pie',
        data: {
            labels: {!! json_encode($jenisSalker->keys()) !!},
            datasets: [{
                data: {!! json_encode($jenisSalker->values()) !!},
                backgroundColor: ['#0B12CD', '#123A5E', '#1E5FA8', '#4A90E2', '#A7C7F9']
            }]
        },
        options: { responsive: true }
    });
</script>
@endsection
