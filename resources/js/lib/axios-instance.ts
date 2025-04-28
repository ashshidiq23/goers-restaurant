import type { AxiosInstance } from 'axios';
import axios from 'axios';


const axiosInstance = <T>(): AxiosInstance => {
  const axiosClient = axios.create();

  axiosClient.defaults.headers.common = {
    'Content-Type': 'application/json',
    Accept: 'application/json',
  };

  axiosClient.defaults.paramsSerializer = {
    indexes: null,
  };

  axiosClient.defaults.withCredentials = true;
  axiosClient.defaults.withXSRFToken = true;

  return axiosClient<T>;
};

export default axiosInstance;
