import useGetData from '@/hooks/use-get-data';
import { BreadcrumbItem } from '@/types';

import {
    type NormalizedRestaurants,
    restaurantsNormalizer
} from './normalizers/restaurants-normalizer';
import type { Restaurants } from './dashboard.types';

const useDashboard = () => {
    const breadcrumbs: BreadcrumbItem[] = [
        {
            title: 'Dashboard',
            href: '/dashboard',
        },
    ];

    const {
        data,
        isLoading,
    } = useGetData<NormalizedRestaurants, Restaurants>(
        ['restaurantList'],
        'api/restaurants',
        { normalizer: restaurantsNormalizer }
    );

    return { breadcrumbs, data, isLoading };
}

export default useDashboard;
