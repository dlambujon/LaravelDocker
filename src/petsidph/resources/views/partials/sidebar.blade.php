<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-light">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="{{ '/' }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-home fa-fw me-3"></i><span>Home</span>
            </a>
            <a href="{{ 'services' }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fa fa-cog fa-spin fa-fw me-3"></i><span>Services</span>
            </a>
            <a href="{{ 'about-us' }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-cat fa-fw me-3"></i><span>About Us</span>
            </a>
            <a href="{{ 'contact-us' }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-fish fa-fw me-3"></i><span>Contact Us</span>
            </a>
            {{--
                        {% if (session != '') %}
            --}}
            <hr>
            {{--
                        {% if ((client != '')or(admin != '')) %}
            --}}
            <a href="{{ 'transactions' }}" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-bar fa-fw me-3"></i><span>Transactions</span>
            </a>
            {{--
                        {% endif %}
            --}}
            <a href="{{ 'pet-registration' }}" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-pencil-alt fa-fw me-3"></i><span>Pet Registration</span>
            </a>
            <a href="{{ 'pets' }}" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-paw fa-fw me-3"></i><span>Pets</span>
            </a>
            <a href="{{ 'calendar' }}" class="list-group-item list-group-item-action py-2 ripple" style="pointer-events: none; background-color: #D3D3D3;">
                <i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span>
            </a>
            <a href="{{ 'sales' }}" class="list-group-item list-group-item-action py-2 ripple" style="pointer-events: none; background-color: #D3D3D3;">
                <i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span>
            </a>
            {{--
                        {% if (admin != '') %}
            --}}
            <hr>
            <a href="{{ 'admin-settings' }}" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-laptop-code fa-fw me-3"></i><span>Admin Settings</span>
            </a>
            {{--
                        {% endif %}
                        {% if (client != '') %}
            --}}
            <hr>
            <a href="{{ 'client-settings' }}" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-laptop-code fa-fw me-3"></i><span>Client Settings</span>
            </a>
            {{--
                        {% endif %}
                        {% endif %}
            --}}
        </div>
    </div>
</nav>
