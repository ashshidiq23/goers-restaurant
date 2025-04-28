import { useEffect, useState } from 'react';
import { usePathname, useRouter, useSearchParams } from 'next/navigation';

import { INITIAL_PAGESIZE } from '@/constants/config';
import type { BaseQueryParams, QueryObject } from '@/types/responses';
import type { SortParam } from '@/types/tables';
import { createQueryParams } from '@/utils';

interface QueryParamsOptions {
  replaceURL?: boolean;
}

const useQueryParams = (initValue?: QueryObject, options?: QueryParamsOptions) => {
  const { replaceURL = true } = options || {};
  const router = useRouter();
  const pathname = usePathname() || '';
  const initQuery = useSearchParams();
  const [queryParams, setQueryParams] = useState<BaseQueryParams>({
    s: '',
    page: 1,
    size: INITIAL_PAGESIZE,
    orderBy: '',
    orderType: '',
  });
  const [filterParams, setFilterParams] = useState<QueryObject>({});
  const [isInit, setIsInit] = useState(false);
  const [isInitCurrentValue, setIsInitCurrentValue] = useState(false);

  const updateQueryParams = (queryObject: BaseQueryParams) => {
    if (typeof queryObject !== 'undefined') {
      const newQueryParams = queryParams ? { ...queryParams, ...queryObject } : queryObject;
      setQueryParams(newQueryParams);
      if (replaceURL) {
        router.replace(`${pathname}?${createQueryParams(newQueryParams)}`, { scroll: false });
      }
    }
  };

  const onPageChange = (val: number) => {
    updateQueryParams({ ...queryParams, page: val });
  };

  const onFilterChange = (value: QueryObject) => {
    updateQueryParams({
      ...queryParams,
      ...value,
      page: 1,
    });
  };

  const onFilterParamsChange = (value: QueryObject) => {
    setFilterParams({
      ...filterParams,
      ...value,
    });
  };

  const onApplyFilterParams = () => {
    updateQueryParams({ ...queryParams, ...filterParams, page: 1 });
  };

  const onResetFilterParams = () => {
    const newParams = { ...filterParams };
    Object.keys(filterParams).forEach((key) => {
      newParams[key] = '';
    });
    setFilterParams(newParams);
    updateQueryParams({ ...queryParams, ...newParams });
  };

  const onSortChange = (params: SortParam) => {
    const { key, direction } = params;
    updateQueryParams({
      ...queryParams,
      page: 1,
      orderBy: key,
      orderType: direction,
    });
  };

  const onPageSizeChange = (val: number) => {
    updateQueryParams({ ...queryParams, size: val, page: 1 });
  };

  const onSearchChange = (val: string) => {
    updateQueryParams({ ...queryParams, s: val, page: 1 });
  };

  // useEffect to set init query from currentUrl
  useEffect(() => {
    if (initQuery && !isInit) {
      const objectQuery = Object.fromEntries(initQuery.entries());
      setFilterParams((prevState) => ({ ...prevState, ...objectQuery }));
      setQueryParams((prevState) => ({ ...prevState, ...objectQuery }));
      setIsInit(true);
    }
  }, [initQuery, isInit]);

  // useEffect to set init query from initValue
  useEffect(() => {
    if (initValue && !isInitCurrentValue) {
      setFilterParams((prevState) => ({ ...prevState, ...initValue }));
      setQueryParams((prevState) => ({ ...prevState, ...initValue }));
      setIsInitCurrentValue(true);
    }
  }, [initValue, isInitCurrentValue]);

  return {
    filterParams,
    queryParams,
    onApplyFilterParams,
    onFilterChange,
    onFilterParamsChange,
    onPageChange,
    onPageSizeChange,
    onResetFilterParams,
    onSearchChange,
    onSortChange,
  };
};

export default useQueryParams;
