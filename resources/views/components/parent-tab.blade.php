<li>
    <button style="border: none; background: none;" onclick="redirect('{{ route('home.index') }}')">
        <a aria-expanded="false">
            <div style="display: flex; gap: 1rem; margin-left: .3rem;">
                <div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <span class="nav-text" style="{{ Request::is('home') ? 'color: rgb(248, 185, 64);' : '' }}">Home</span>
            </div>
        </a>
    </button>
</li>

<li>
    <button style="border: none; background: none;" onclick="redirect('{{ route('parent.announcement.index') }}')">
        <a aria-expanded="false">
            <div style="display: flex; gap: 1rem; margin-left: .3rem;">
                <div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <span class="nav-text" style="{{ Request::is('parent/announcement') ? 'color: rgb(248, 185, 64);' : '' }}">Announcement</span>
            </div>
        </a>
    </button>
</li>

<li>
    <button style="border: none; background: none;" onclick="redirect('{{ route('parent.attendance.index') }}')">
        <a aria-expanded="false">
            <div style="display: flex; gap: 1rem; margin-left: .3rem;">
                <div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <span class="nav-text" style="{{ Request::is('parent/attendance') ? 'color: rgb(248, 185, 64);' : '' }}">Attendance</span>
            </div>
        </a>
    </button>
</li>

<li>
    <button style="border: none; background: none;" onclick="redirect('{{ route('parent.grades_scores.index') }}')">
        <a aria-expanded="false">
            <div style="display: flex; gap: 1rem; margin-left: .3rem;">
                <div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <span class="nav-text" style="{{ Request::is('parent/grades&scores') ? 'color: rgb(248, 185, 64);' : '' }}">Grades and Scores</span>
            </div>
        </a>
    </button>
</li>
