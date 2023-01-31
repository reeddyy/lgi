<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('survey_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.surveys.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/surveys") || request()->is("admin/surveys/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-edit c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.survey.title') }}
                </a>
            </li>
        @endcan
        @can('record_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.records.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/records") || request()->is("admin/records/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-table c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.record.title') }}
                </a>
            </li>
        @endcan
        @can('result_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.results.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/results") || request()->is("admin/results/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-calculator c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.result.title') }}
                </a>
            </li>
        @endcan
        @can('report_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.reports.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/reports") || request()->is("admin/reports/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-file-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.report.title') }}
                </a>
            </li>
        @endcan
        @can('option_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/countries*") ? "c-show" : "" }} {{ request()->is("admin/employments*") ? "c-show" : "" }} {{ request()->is("admin/industries*") ? "c-show" : "" }} {{ request()->is("admin/turnovers*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-grip-vertical c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.option.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('country_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.countries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-globe-asia c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.country.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employment_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employments") || request()->is("admin/employments/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employment.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('industry_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.industries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/industries") || request()->is("admin/industries/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-industry c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.industry.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('turnover_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.turnovers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/turnovers") || request()->is("admin/turnovers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.turnover.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/audit-logs*") ? "c-show" : "" }} {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>