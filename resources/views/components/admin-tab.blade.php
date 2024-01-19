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
    <button style="border: none; background: none;" onclick="redirect('{{ route('administrator.user.index') }}')">
        <a aria-expanded="false">
            <div style="display: flex; gap: 1rem; margin-left: .3rem;">
                <div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <span class="nav-text" style="{{ Request::is('administrator/user') ? 'color: rgb(248, 185, 64);' : '' }}">Create Account</span>
            </div>
        </a>
    </button>
</li>




<li>
    <button style="border: none; background: none;">
        <a aria-expanded="false">
            <div style="display: flex; gap: 1rem; margin-left: .3rem;">
                <div>
                    <i class="fa-solid fa-gear"></i>
                </div>
                <span class="nav-text">Settings</span>
            </div>
        </a>
    </button>
</li>
