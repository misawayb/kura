```mermaid
erDiagram
    users{
        bigint id PK
        varchar name
        varchar email
        varchar password
        timestamp created_at
        timestamp updated_at
    }

    categories{
        bigint id PK
        bigint user_id FK
        varchar name
        string type
        timestamp created_at
        timestamp updated_at
    }

    transactions{
        bigint id PK
        bigint user_id FK
        bigint category_id FK
        string category_type
        date date
        bigint amount
        timestamp created_at
        timestamp updated_at
    }

    budgets{
        bigint id PK
        bigint user_id FK
        bigint category_id FK
        bigint amount
        timestamp created_at
        timestamp updated_at
    }

    users ||--o{ categories : "has many"
    users ||--o{ transactions : "has many"
    users ||--o{ budgets : "has many"
    categories ||--o{ transactions : "has many"
    categories ||--o{ budgets : "has many"