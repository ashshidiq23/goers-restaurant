import { Head } from '@inertiajs/react';

import DataTable from '@/components/ui/datatable';
import AppLayout from '@/layouts/app-layout';

import { TABLE_COLUMNS } from './dashboard.constants';
import useDashboard from './dashboard.hooks';

const Dashboard = () => {
    const { breadcrumbs, data = [], isLoading } = useDashboard();
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="h-full rounded-xl p-4">
                <DataTable data={data} columns={TABLE_COLUMNS} loading={isLoading} />
            </div>
        </AppLayout>
    );
};

export default Dashboard;
