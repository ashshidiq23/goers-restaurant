import type { AxiosError } from 'axios';

import axiosInstance from '@/lib/axios-instance';
import type { FetcherProps } from '@/types/fetcher-props';
import type { BaseError } from '@/types/responses';

const defaultFetcherFn = async <T, TParam = T>(options: FetcherProps<T, TParam>): Promise<T> => {
  const {
    url,
    data,
    normalizer,
    headers,
    method = 'get',
    params,
    onUploadProgress,
    responseType = 'json',
  } = options || {};
  const instance = axiosInstance();
  return instance<T>({
    data,
    headers,
    method,
    params,
    url,
    onUploadProgress,
    responseType,
  })
    .then((response) => {
      const dataRes = response.data;
      if (typeof normalizer === 'function') {
        return normalizer(dataRes as unknown as TParam);
      }
      return dataRes;
    })
    .catch((error: AxiosError<BaseError>) => {
      throw error;
    });
};

export default defaultFetcherFn;
