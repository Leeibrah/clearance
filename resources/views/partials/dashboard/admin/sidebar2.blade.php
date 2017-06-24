<ul class="list-unstyled clearfix nav-list mb15">
	<li class="active">
		<a href="{!! route('admin.dashboard') !!}">
			<i class="ion ion-monitor"></i>
			<span class="text">Dashboard</span>
		</a>
	</li>
	<li>
		<a href="{!! route('admin.users.index') !!}">
			<i class="ion ion-ios-people"></i>
			<span class="text">Users</span>
			<span class="badge badge-xs badge-danger">
				{!! DB::table('users')->count(); !!}
			</span>
		</a>
	</li>

	<li>
		<a href="{!! route('admin.companies.index') !!}">
			<i class="ion ion-ios-home"></i>
			<span class="text">Companies</span>
			<span class="badge badge-xs badge-danger">
				{!! DB::table('companies')->count(); !!}
			</span>
		</a>
	</li>

	<li>
		<a href="javascript:;">
			<i class="ion ion-calendar"></i>
			<span class="text">Loans</span>
			<i class="arrow ion-chevron-left"></i>
			<!-- <span class="badge badge-xs badge-primary">2</span> -->
		</a>
		<ul class="inner-drop nested list-unstyled">
			<li>
				<a href="{!! route('admin.loans.previous.disbursed') !!}">
					Previous Disbursed
				</a>
			</li>
		</ul>
		<ul class="inner-drop nested list-unstyled">
			<li>
				<a href="{!! route('admin.loans.disbursed') !!}">
					Disbursed
				</a>
			</li>
		</ul>
		<ul class="inner-drop nested list-unstyled">
			<li>
				<a href="{!! route('admin.loans.repayment') !!}">
					Repayment Scheduled
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="javascript:;">
			<i class="ion ion-calendar"></i>
			<span class="text">Salary Advance</span>
			<i class="arrow ion-chevron-left"></i>
			<!-- <span class="badge badge-xs badge-primary">2</span> -->
		</a>
		<ul class="inner-drop nested list-unstyled">
			<li>
				<a href="{!! route('admin.salaryadvance.index') !!}">
					All Registered Users
				</a>
			</li>
		</ul>
		<ul class="inner-drop nested list-unstyled">
			<li>
				<a href="{!! route('admin.salaryadvance.customers') !!}">
					Applied Customers
				</a>
			</li>
		</ul>
		<ul class="inner-drop nested list-unstyled">
			<li>
				<a href="{!! route('admin.salaryadvance.received') !!}">
					Received Loans
				</a>
			</li>
		</ul>
	</li>
	
	<li>
		<a href="javascript:;">
			<i class="ion ion-calendar"></i>
			<span class="text">Employees</span>
			<i class="arrow ion-chevron-left"></i>
			<!-- <span class="badge badge-xs badge-primary">2</span> -->
		</a>
		<ul class="inner-drop nested list-unstyled">
			<li>
				<a href="{!! route('admin.employees.self-registered') !!}">
					Self Registered
				</a>
			</li>
		</ul>
		<ul class="inner-drop nested list-unstyled">
			<li>
				<a href="{!! route('admin.employees.company-registered') !!}">
					Company Registered
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="javascript:;">
			<i class="ion ion-android-textsms"></i>
			<span class="text">SMS</span>
			<i class="arrow ion-chevron-left"></i>
		</a>
		<ul class="inner-drop list-unstyled">
			<li>
				<a href="{!! route('admin.inbox.index') !!}">
					Inbox
				</a>
			</li>
			<li>
				<a href="{!! route('admin.outbox.index') !!}">
					Outbox
				</a>
			</li>
			<li>
				<a href="{!! route('admin.inbox.create') !!}">
					Send Custom
				</a>
			</li>
		</ul>
	</li>
	<li>
		<a href="javascript:;">
			<i class="ion ion-document-text"></i>
			<span class="text">Transactions</span>
			<i class="arrow ion-chevron-left"></i>
		</a>
		<ul class="inner-drop list-unstyled">
			<li><a href="{!! route('transactions.send') !!}">Send</a></li>
		</ul>
		<ul class="inner-drop list-unstyled">
			<li><a href="{!! route('transactions.received') !!}">Received</a></li>
		</ul>
	</li>
	
</ul>