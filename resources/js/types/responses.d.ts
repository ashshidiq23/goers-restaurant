export interface PaginationData<T> {
  items: T[];
  hasNextPage: boolean;
  page: number;
  pageSize: number;
  totalData?: number;
  totalDataAfterFilter?: number
}

export interface ErrorPayload {
  attemptedValue: string;
  errorCode: string;
  message: string;
  propertyName: string;
}

export type QueryObject = Record<string, string | number | undefined>;

export type BaseQueryParams = {
  s?: string;
  page: number;
  size: number;
  orderType: string;
  orderBy: string;
} & QueryObject;

export interface OptionItemResponse {
  key: string;
  value: string;
}

export interface FileRepositoryResponse {
  fileId: string;
  fileUrl: string;
  newFileName: string;
  path: string;
}

type AuditTrailKey = `${'created' | 'lastUpdated'}${'By' | 'ByFullName' | 'At'}`;

export type AuditTrail = Record<AuditTrailKey, string>;

export type SearchOptions = OptionItemResponse[];
