{{Former::text('first_name')
    ->label('First Name')
    ->required()}}
{{Former::text('last_name')
    ->label('Last Name')
    ->required()}}
{{Former::email('email')
    ->required()}}
{{Former::select('organizationunit_id')
    ->label('Organization Unit')
    ->options(OrganizationUnit::all()->lists('name', 'id'))
    ->required()}}
{{Former::multiselect('roles')
    ->label('Roles')
    ->options(Role::all()->lists('name', 'id'), (isset($user) ? $user->roles->lists('id') : [])) }}
