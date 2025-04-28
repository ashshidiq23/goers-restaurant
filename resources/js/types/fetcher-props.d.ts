import type { AxiosProgressEvent } from 'axios';

export interface FetcherProps<T, TParam = T> {
  url: string;
  data?: unknown;
  normalizer?: (data: TParam) => T;
  headers?: Record<string, string>;
  params?: Record<string, unknown>;
  method: string;
  onUploadProgress?: (progressEvent: AxiosProgressEvent) => void;
  responseType?:
  | 'arraybuffer'
  | 'blob'
  | 'document'
  | 'json'
  | 'text'
  | 'stream';
}
