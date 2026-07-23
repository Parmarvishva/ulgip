<x-filament-panels::page>

<!-- ================= HERO ================= -->

<div class="hero-card">

    <div class="hero-left">

        <span class="status">
            🟢 System Status • Online
        </span>

        <h1>
            Good Morning,<br>
            {{ auth()->user()->name }}
        </h1>

        <p>
            {{ now()->format('l, d F Y') }}
            • Tier 3 Security Clearance
        </p>

    </div>

    <div class="hero-right">

        <h3>Threat Monitoring</h3>

        <h2>{{ $alerts }}</h2>

        <span class="secure">
            Secure
        </span>

    </div>

</div>

<!-- ================= STATS ================= -->

<div class="stats">

    <div class="card">
        <h4>Total Documents</h4>
        <h2>{{ $documents }}</h2>
        <span>+12%</span>
    </div>

    <div class="card">
        <h4>Categories</h4>
        <h2>{{ $categories }}</h2>
        <span>Active</span>
    </div>

    <div class="card">
        <h4>Users</h4>
        <h2>{{ $users }}</h2>
        <span>Online</span>
    </div>

    <div class="card">
        <h4>Cyber Alerts</h4>
        <h2>{{ $alerts }}</h2>
        <span>Secure</span>
    </div>

</div>

<!-- ================= QUICK ACTIONS ================= -->

<div class="quick-actions">

    <div class="action-card">
        <div class="icon">📄</div>
        <h3>Add Document</h3>
        <p>Create & manage documents</p>
    </div>

    <div class="action-card">
        <div class="icon">📂</div>
        <h3>Categories</h3>
        <p>Manage categories</p>
    </div>

    <div class="action-card">
        <div class="icon">👥</div>
        <h3>Users</h3>
        <p>Manage system users</p>
    </div>

    <div class="action-card">
        <div class="icon">🛡️</div>
        <h3>Cyber Alerts</h3>
        <p>Security monitoring</p>
    </div>

</div>
<!-- ================= DASHBOARD GRID ================= -->

<div class="dashboard-grid">

    <!-- LEFT SIDE -->

    <div class="left-panel">

        <div class="recent-card">

            <h2>📄 Recent Documents</h2>

            <table>

                <thead>
                    <tr>
                        <th>Document</th>
                        <th>Category</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>GST Policy.pdf</td>
                        <td>Finance</td>
                        <td><span class="badge success">Approved</span></td>
                    </tr>

                    <tr>
                        <td>Cyber Report.pdf</td>
                        <td>Security</td>
                        <td><span class="badge warning">Pending</span></td>
                    </tr>

                    <tr>
                        <td>Legal Notice.pdf</td>
                        <td>Legal</td>
                        <td><span class="badge success">Approved</span></td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

    <!-- RIGHT SIDE -->

    <div class="right-panel">

        <div class="activity-card">

            <h2>⚡ Recent Activity</h2>

            <ul class="activity-list">

                <li>📄 New document uploaded</li>

                <li>👤 New user registered</li>

                <li>🛡️ Security scan completed</li>

                <li>📂 Category updated</li>

            </ul>

        </div>

        

</div>

<!-- અહીં Paste કરવું -->
<div class="bottom-grid">

    <div class="storage-card">

        <h2>💾 Storage Usage</h2>

        <div class="storage-info">
            <span>Used Storage</span>
            <strong>72%</strong>
        </div>

        <div class="progress">
            <div class="progress-bar"></div>
        </div>

        <p>72 GB of 100 GB Used</p>

    </div>

    <div class="storage-card">

        <h2>👥 Recent Users</h2>

        <div class="user-item">
            <strong>Admin</strong>
            <span>Online</span>
        </div>

        <div class="user-item">
            <strong>Vishva Parmar</strong>
            <span>Online</span>
        </div>

        <div class="user-item">
            <strong>John Doe</strong>
            <span>Offline</span>
        </div>

    </div>

</div>

<style>



    
.hero-card{
    background:linear-gradient(135deg,#1e3a8a,#0284c7);
    color:#fff;
    border-radius:30px;
    padding:60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
    box-shadow:0 25px 60px rgba(0,0,0,.20);
}

.hero-left h1{
    font-size:52px;
    margin:20px 0;
    line-height:1.1;
}

.status{
    display:inline-block;
    background:rgba(255,255,255,.15);
    padding:10px 18px;
    border-radius:30px;
}

.hero-right{
    min-width:240px;
    text-align:center;
    background:rgba(255,255,255,.15);
    padding:35px;
    border-radius:25px;
    backdrop-filter:blur(15px);
}

.hero-right h2{
    font-size:65px;
    margin:15px 0;
}

.secure{
    display:inline-block;
    margin-top:15px;
    background:#22c55e;
    color:#fff;
    padding:8px 18px;
    border-radius:30px;
}

/* Stats */

.stats{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
    margin-bottom:35px;
}

.card{
    background:#fff;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.card h4{
    color:#6b7280;
    margin-bottom:15px;
}

.card h2{
    color:#111827;
    font-size:40px;
    margin-bottom:10px;
}

.card span{
    color:#16a34a;
    font-weight:600;
}

/* Quick Actions */

.quick-actions{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
    margin-bottom:35px;
}

.action-card{
    background:#fff;
    border-radius:20px;
    padding:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
    cursor:pointer;
}

.action-card:hover{
    transform:translateY(-6px);
}

.icon{
    font-size:40px;
    margin-bottom:15px;
}

/* Grid */

.dashboard-grid{
    display:grid;
    grid-template-columns:3fr 1.2fr;
    gap:30px;
    align-items:start;
}

.left-panel{
    display:flex;
    flex-direction:column;
    gap:30px;
}

.right-panel{
    display:flex;
    flex-direction:column;
    gap:25px;
    width:100%;
}

/* Cards */

.recent-card,
.activity-card,
.storage-card{
    width:100%;
    margin:0;
    background:#fff;
    border-radius:20px;
    padding:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    width:100%;
    box-sizing:border-box;
}

.recent-card h2,
.activity-card h2,
.storage-card h2{
    margin-bottom:20px;
    color:#111827;
}

/* Table */

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:14px;
    border-bottom:1px solid #eee;
    text-align:left;
}

th{
    color:#6b7280;
}

/* Badge */

.badge{
    padding:6px 14px;
    border-radius:20px;
    color:#fff;
    font-size:13px;
}

.success{
    background:#16a34a;
}

.warning{
    background:#f59e0b;
}

/* Activity */

.activity-list{
    list-style:none;
    margin:0;
    padding:0;
}

.activity-list li{
    padding:14px 0;
    border-bottom:1px solid #eee;
}

/* Storage */

.storage-info{
    display:flex;
    justify-content:space-between;
    margin-bottom:12px;
}

.progress{
    height:10px;
    background:#e5e7eb;
    border-radius:20px;
    overflow:hidden;
    margin-bottom:12px;
}

.progress-bar{
    width:72%;
    height:100%;
    background:linear-gradient(90deg,#2563eb,#06b6d4);
}

/* Users */

.user-item{
    display:flex;
    justify-content:space-between;
    padding:14px 0;
    border-bottom:1px solid #eee;
}

.user-item:last-child{
    border:none;
}
.bottom-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:30px;
    margin-top:30px;
}
</style>


</x-filament-panels::page>