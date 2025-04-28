import { useState } from 'react';

import useGetData from '@/hooks/use-get-data';
import { BreadcrumbItem } from '@/types';
import createQueryParams from '@/utils/create-query-params';

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

    const [queryParams, setQueryParams] = useState({name: '', date: '', time: ''})

    const {
        data,
        isLoading,
    } = useGetData<NormalizedRestaurants, Restaurants>(
        ['restaurantList', createQueryParams(queryParams)],
        'api/restaurants',
        { normalizer: restaurantsNormalizer, params: queryParams }
    );

    const handleChangeFilter = (key: string, value: string) => {
        setQueryParams((prev) => ({ ...prev, [key]: value }));
    }

    return {
        breadcrumbs,
        data,
        isLoading,
        handleChangeFilter,
    };
}

export default useDashboard;
