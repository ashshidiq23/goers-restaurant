import { Head } from '@inertiajs/react';

import DataTable from '@/components/ui/datatable';
import { Input } from '@/components/ui/input';
import AppLayout from '@/layouts/app-layout';

import { TABLE_COLUMNS } from './dashboard.constants';
import useDashboard from './dashboard.hooks';

const Dashboard = () => {
    const {
        breadcrumbs,
        data = [],
        isLoading,
        handleChangeFilter,
    } = useDashboard();
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="h-full rounded-xl p-4 flex flex-col gap-4">
                <div className="flex justify-between items-center gap-4">
                    <Input
                        id="search"
                        placeholder="Search..."
                        onChange={(e) => handleChangeFilter('name', e.target.value)}
                    />
                </div>
                <DataTable data={data} columns={TABLE_COLUMNS} loading={isLoading} />
            </div>
        </AppLayout>
    );
};

export default Dashboard;
