<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace LaravelIdea\Helper {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\ConnectionInterface;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Query\Expression;
    
    /**
     * @see \Illuminate\Database\Query\Builder::whereIn
     * @method $this whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereNotIn
     * @method $this orWhereNotIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::selectRaw
     * @method $this selectRaw(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::insertOrIgnore
     * @method int insertOrIgnore(array $values)
     * @see \Illuminate\Database\Query\Builder::unionAll
     * @method $this unionAll(\Closure|\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereNull
     * @method $this orWhereNull(array|string $column)
     * @see \Illuminate\Database\Query\Builder::joinWhere
     * @method $this joinWhere(string $table, \Closure|string $first, string $operator, string $second, string $type = 'inner')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContains
     * @method $this orWhereJsonContains(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::raw
     * @method Expression raw($value)
     * @see \Illuminate\Database\Query\Builder::orderBy
     * @method $this orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @see \Illuminate\Database\Concerns\BuildsQueries::each
     * @method $this each(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::setBindings
     * @method $this setBindings(array $bindings, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonLength
     * @method $this orWhereJsonLength(string $column, $operator, $value = null)
     * @see \Illuminate\Database\Query\Builder::whereRowValues
     * @method $this whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerInRaw
     * @method $this orWhereIntegerInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::orWhereNotExists
     * @method $this orWhereNotExists(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::newQuery
     * @method $this newQuery()
     * @see \Illuminate\Database\Query\Builder::rightJoinSub
     * @method $this rightJoinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::crossJoin
     * @method $this crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::average
     * @method mixed average(string $column)
     * @see \Illuminate\Database\Query\Builder::existsOr
     * @method $this existsOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::sum
     * @method mixed sum(string $column)
     * @see \Illuminate\Database\Query\Builder::havingRaw
     * @method $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkMap
     * @method $this chunkMap(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::orWhereColumn
     * @method $this orWhereColumn(array|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::getRawBindings
     * @method $this getRawBindings()
     * @see \Illuminate\Database\Query\Builder::min
     * @method mixed min(string $column)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method $this unless($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereNotIn
     * @method $this whereNotIn(string $column, $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereTime
     * @method $this whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertUsing
     * @method int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazyById
     * @method $this lazyById($chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::rightJoinWhere
     * @method $this rightJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::union
     * @method $this union(\Closure|\Illuminate\Database\Query\Builder $query, bool $all = false)
     * @see \Illuminate\Database\Query\Builder::groupBy
     * @method $this groupBy(...$groups)
     * @see \Illuminate\Database\Query\Builder::orWhereDay
     * @method $this orWhereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::joinSub
     * @method $this joinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::selectSub
     * @method $this selectSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::dd
     * @method void dd()
     * @see \Illuminate\Database\Query\Builder::prepareValueAndOperator
     * @method $this prepareValueAndOperator(string $value, string $operator, bool $useDefault = false)
     * @see \Illuminate\Database\Query\Builder::whereNull
     * @method $this whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereIntegerNotInRaw
     * @method $this whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRaw
     * @method $this orWhereRaw(string $sql, $bindings = [])
     * @see \Illuminate\Database\Query\Builder::whereJsonContains
     * @method $this whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereBetweenColumns
     * @method $this orWhereBetweenColumns(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::mergeWheres
     * @method $this mergeWheres(array $wheres, array $bindings)
     * @see \Illuminate\Database\Query\Builder::applyBeforeQueryCallbacks
     * @method $this applyBeforeQueryCallbacks()
     * @see \Illuminate\Database\Query\Builder::sharedLock
     * @method $this sharedLock()
     * @see \Illuminate\Database\Query\Builder::orderByRaw
     * @method $this orderByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::doesntExist
     * @method bool doesntExist()
     * @see \Illuminate\Database\Query\Builder::orWhereMonth
     * @method $this orWhereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::whereNotNull
     * @method $this whereNotNull(array|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::count
     * @method int count(string $columns = '*')
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
     * @method $this orWhereNotBetween(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::fromRaw
     * @method $this fromRaw(string $expression, $bindings = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method $this mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Query\Builder::take
     * @method $this take(int $value)
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetweenColumns
     * @method $this orWhereNotBetweenColumns(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::updateOrInsert
     * @method $this updateOrInsert(array $attributes, array $values = [])
     * @see \Illuminate\Database\Query\Builder::cloneWithout
     * @method $this cloneWithout(array $properties)
     * @see \Illuminate\Database\Query\Builder::whereBetweenColumns
     * @method $this whereBetweenColumns(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::fromSub
     * @method $this fromSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::cleanBindings
     * @method $this cleanBindings(array $bindings)
     * @see \Illuminate\Database\Query\Builder::orWhereDate
     * @method $this orWhereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::avg
     * @method mixed avg(string $column)
     * @see \Illuminate\Database\Query\Builder::addBinding
     * @method $this addBinding($value, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::getGrammar
     * @method $this getGrammar()
     * @see \Illuminate\Database\Query\Builder::lockForUpdate
     * @method $this lockForUpdate()
     * @see \Illuminate\Database\Concerns\BuildsQueries::eachById
     * @method $this eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::cloneWithoutBindings
     * @method $this cloneWithoutBindings(array $except)
     * @see \Illuminate\Database\Query\Builder::orHavingRaw
     * @method $this orHavingRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::forPageBeforeId
     * @method $this forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::orWhereBetween
     * @method $this orWhereBetween(string $column, array $values)
     * @see \Illuminate\Database\Concerns\ExplainsQueries::explain
     * @method $this explain()
     * @see \Illuminate\Database\Query\Builder::select
     * @method $this select(array|mixed $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::addSelect
     * @method $this addSelect(array|mixed $column)
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method $this when($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::orWhereExists
     * @method $this orWhereExists(\Closure $callback, bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereJsonLength
     * @method $this whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::beforeQuery
     * @method $this beforeQuery(callable $callback)
     * @see \Illuminate\Database\Query\Builder::truncate
     * @method $this truncate()
     * @see \Illuminate\Database\Query\Builder::lock
     * @method $this lock(bool|string $value = true)
     * @see \Illuminate\Database\Query\Builder::join
     * @method $this join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::whereMonth
     * @method $this whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::having
     * @method $this having(string $column, null|string $operator = null, null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereNested
     * @method $this whereNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRowValues
     * @method $this orWhereRowValues(array $columns, string $operator, array $values)
     * @see \Illuminate\Database\Query\Builder::useWritePdo
     * @method $this useWritePdo()
     * @see \Illuminate\Database\Query\Builder::orWhereIn
     * @method $this orWhereIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::orderByDesc
     * @method $this orderByDesc(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::orWhereNotNull
     * @method $this orWhereNotNull(string $column)
     * @see \Illuminate\Database\Query\Builder::getProcessor
     * @method $this getProcessor()
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazy
     * @method $this lazy(int $chunkSize = 1000)
     * @see \Illuminate\Database\Query\Builder::skip
     * @method $this skip(int $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinWhere
     * @method $this leftJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::doesntExistOr
     * @method $this doesntExistOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::whereNotExists
     * @method $this whereNotExists(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereIntegerInRaw
     * @method $this whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereDay
     * @method $this whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::forNestedWhere
     * @method $this forNestedWhere()
     * @see \Illuminate\Database\Query\Builder::whereExists
     * @method $this whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::max
     * @method mixed max(string $column)
     * @see \Illuminate\Database\Query\Builder::inRandomOrder
     * @method $this inRandomOrder(string $seed = '')
     * @see \Illuminate\Database\Query\Builder::havingBetween
     * @method $this havingBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereYear
     * @method $this orWhereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkById
     * @method $this chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::whereDate
     * @method $this whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContain
     * @method $this whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::forPageAfterId
     * @method $this forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::forPage
     * @method $this forPage(int $page, int $perPage = 15)
     * @see \Illuminate\Database\Query\Builder::exists
     * @method bool exists()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method $this macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Concerns\BuildsQueries::first
     * @method $this first(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereColumn
     * @method $this whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::numericAggregate
     * @method $this numericAggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotBetween
     * @method $this whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getConnection
     * @method ConnectionInterface getConnection()
     * @see \Illuminate\Database\Query\Builder::mergeBindings
     * @method $this mergeBindings(\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain
     * @method $this orWhereJsonDoesntContain(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinSub
     * @method $this leftJoinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::crossJoinSub
     * @method $this crossJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::limit
     * @method $this limit(int $value)
     * @see \Illuminate\Database\Query\Builder::from
     * @method $this from(\Closure|\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Query\Builder::whereNotBetweenColumns
     * @method $this whereNotBetweenColumns(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertGetId
     * @method int insertGetId(array $values, null|string $sequence = null)
     * @see \Illuminate\Database\Query\Builder::whereBetween
     * @method $this whereBetween(Expression|string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Concerns\BuildsQueries::tap
     * @method $this tap(callable $callback)
     * @see \Illuminate\Database\Query\Builder::offset
     * @method $this offset(int $value)
     * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
     * @method $this addNestedWhereQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::rightJoin
     * @method $this rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::leftJoin
     * @method $this leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::insert
     * @method bool insert(array $values)
     * @see \Illuminate\Database\Query\Builder::distinct
     * @method $this distinct()
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunk
     * @method $this chunk(int $count, callable $callback)
     * @see \Illuminate\Database\Query\Builder::reorder
     * @method $this reorder(\Closure|\Illuminate\Database\Query\Builder|Expression|null|string $column = null, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::whereYear
     * @method $this whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getCountForPagination
     * @method $this getCountForPagination(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw
     * @method $this orWhereIntegerNotInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::groupByRaw
     * @method $this groupByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::aggregate
     * @method $this aggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::dump
     * @method void dump()
     * @see \Illuminate\Database\Query\Builder::implode
     * @method $this implode(string $column, string $glue = '')
     * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
     * @method $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method $this macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Query\Builder::whereRaw
     * @method $this whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::toSql
     * @method string toSql()
     * @see \Illuminate\Database\Query\Builder::orHaving
     * @method $this orHaving(string $column, null|string $operator = null, null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::getBindings
     * @method array getBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereTime
     * @method $this orWhereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::dynamicWhere
     * @method $this dynamicWhere(string $method, array $parameters)
     */
    class _BaseBuilder extends Builder {}
    
    /**
     * @method \Illuminate\Support\Collection mapSpread(callable $callback)
     * @method \Illuminate\Support\Collection mapWithKeys(callable $callback)
     * @method \Illuminate\Support\Collection zip($items)
     * @method \Illuminate\Support\Collection partition(callable|string $key, $operator = null, $value = null)
     * @method \Illuminate\Support\Collection mapInto(string $class)
     * @method \Illuminate\Support\Collection mapToGroups(callable $callback)
     * @method \Illuminate\Support\Collection map(callable $callback)
     * @method \Illuminate\Support\Collection groupBy(array|callable|string $groupBy, bool $preserveKeys = false)
     * @method \Illuminate\Support\Collection pluck(array|string $value, null|string $key = null)
     * @method \Illuminate\Support\Collection pad(int $size, $value)
     * @method \Illuminate\Support\Collection split(int $numberOfGroups)
     * @method \Illuminate\Support\Collection combine($values)
     * @method \Illuminate\Support\Collection countBy(callable|string $countBy = null)
     * @method \Illuminate\Support\Collection mapToDictionary(callable $callback)
     * @method \Illuminate\Support\Collection keys()
     * @method \Illuminate\Support\Collection transform(callable $callback)
     * @method \Illuminate\Support\Collection flatMap(callable $callback)
     * @method \Illuminate\Support\Collection collapse()
     */
    class _BaseCollection extends \Illuminate\Database\Eloquent\Collection {}
}

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Attribute;
    use App\Models\AttributeValue;
    use App\Models\Category;
    use App\Models\ConfirmComment;
    use App\Models\CustomProduct;
    use App\Models\CustomService;
    use App\Models\Detail;
    use App\Models\Membership;
    use App\Models\NormalProduct;
    use App\Models\NormalService;
    use App\Models\ProductCategory;
    use App\Models\ProductCustomerComments;
    use App\Models\ProductImage;
    use App\Models\productPriceHistory;
    use App\Models\ProductTag;
    use App\Models\RolesShopsUsers;
    use App\Models\Shop;
    use App\Models\Tag;
    use App\Models\Tasks;
    use App\Models\Team;
    use App\Models\TeamInvitation;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role;
    
    /**
     * @method AttributeValue shift(int $count = 1)
     * @method AttributeValue pop(int $count = 1)
     * @method AttributeValue get($key, $default = null)
     * @method AttributeValue pull($key, $default = null)
     * @method AttributeValue first(callable $callback = null, $default = null)
     * @method AttributeValue firstWhere(string $key, $operator = null, $value = null)
     * @method AttributeValue find($key, $default = null)
     * @method AttributeValue[] all()
     * @method AttributeValue last(callable $callback = null, $default = null)
     */
    class _IH_AttributeValue_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AttributeValue[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AttributeValue_QB whereId($value)
     * @method _IH_AttributeValue_QB whereAttributeValueName($value)
     * @method _IH_AttributeValue_QB whereAttributeValueAdditionalType($value)
     * @method _IH_AttributeValue_QB whereAttributeValueAdditionalUser($value)
     * @method _IH_AttributeValue_QB whereAttributeValuePublishStatus($value)
     * @method _IH_AttributeValue_QB whereAttributeValueStatusAccept($value)
     * @method _IH_AttributeValue_QB whereDeletedAt($value)
     * @method _IH_AttributeValue_QB whereCreatedAt($value)
     * @method _IH_AttributeValue_QB whereUpdatedAt($value)
     * @method AttributeValue baseSole(array|string $columns = ['*'])
     * @method AttributeValue create(array $attributes = [])
     * @method _IH_AttributeValue_C|AttributeValue[] cursor()
     * @method AttributeValue|null find($id, array $columns = ['*'])
     * @method _IH_AttributeValue_C|AttributeValue[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AttributeValue findOrFail($id, array $columns = ['*'])
     * @method AttributeValue findOrNew($id, array $columns = ['*'])
     * @method AttributeValue first(array|string $columns = ['*'])
     * @method AttributeValue firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AttributeValue firstOrCreate(array $attributes = [], array $values = [])
     * @method AttributeValue firstOrFail(array $columns = ['*'])
     * @method AttributeValue firstOrNew(array $attributes = [], array $values = [])
     * @method AttributeValue firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AttributeValue forceCreate(array $attributes)
     * @method _IH_AttributeValue_C|AttributeValue[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AttributeValue_C|AttributeValue[] get(array|string $columns = ['*'])
     * @method AttributeValue getModel()
     * @method AttributeValue[] getModels(array|string $columns = ['*'])
     * @method _IH_AttributeValue_C|AttributeValue[] hydrate(array $items)
     * @method AttributeValue make(array $attributes = [])
     * @method AttributeValue newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AttributeValue[]|_IH_AttributeValue_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AttributeValue[]|_IH_AttributeValue_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AttributeValue sole(array|string $columns = ['*'])
     * @method AttributeValue updateOrCreate(array $attributes, array $values = [])
     * @method _IH_AttributeValue_QB withTrashed()
     * @method _IH_AttributeValue_QB onlyTrashed()
     * @method _IH_AttributeValue_QB withoutTrashed()
     * @method _IH_AttributeValue_QB restore()
     */
    class _IH_AttributeValue_QB extends _BaseBuilder {}
    
    /**
     * @method Attribute shift(int $count = 1)
     * @method Attribute pop(int $count = 1)
     * @method Attribute get($key, $default = null)
     * @method Attribute pull($key, $default = null)
     * @method Attribute first(callable $callback = null, $default = null)
     * @method Attribute firstWhere(string $key, $operator = null, $value = null)
     * @method Attribute find($key, $default = null)
     * @method Attribute[] all()
     * @method Attribute last(callable $callback = null, $default = null)
     */
    class _IH_Attribute_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Attribute[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Attribute_QB whereId($value)
     * @method _IH_Attribute_QB whereAttributeName($value)
     * @method _IH_Attribute_QB whereAttributeAdditionalType($value)
     * @method _IH_Attribute_QB whereAttributeAdditionalUser($value)
     * @method _IH_Attribute_QB whereAttributePublishStatus($value)
     * @method _IH_Attribute_QB whereAttributeStatusAccept($value)
     * @method _IH_Attribute_QB whereDeletedAt($value)
     * @method _IH_Attribute_QB whereCreatedAt($value)
     * @method _IH_Attribute_QB whereUpdatedAt($value)
     * @method Attribute baseSole(array|string $columns = ['*'])
     * @method Attribute create(array $attributes = [])
     * @method _IH_Attribute_C|Attribute[] cursor()
     * @method Attribute|null find($id, array $columns = ['*'])
     * @method _IH_Attribute_C|Attribute[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Attribute findOrFail($id, array $columns = ['*'])
     * @method Attribute findOrNew($id, array $columns = ['*'])
     * @method Attribute first(array|string $columns = ['*'])
     * @method Attribute firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Attribute firstOrCreate(array $attributes = [], array $values = [])
     * @method Attribute firstOrFail(array $columns = ['*'])
     * @method Attribute firstOrNew(array $attributes = [], array $values = [])
     * @method Attribute firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Attribute forceCreate(array $attributes)
     * @method _IH_Attribute_C|Attribute[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Attribute_C|Attribute[] get(array|string $columns = ['*'])
     * @method Attribute getModel()
     * @method Attribute[] getModels(array|string $columns = ['*'])
     * @method _IH_Attribute_C|Attribute[] hydrate(array $items)
     * @method Attribute make(array $attributes = [])
     * @method Attribute newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Attribute[]|_IH_Attribute_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Attribute[]|_IH_Attribute_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Attribute sole(array|string $columns = ['*'])
     * @method Attribute updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Attribute_QB withTrashed()
     * @method _IH_Attribute_QB onlyTrashed()
     * @method _IH_Attribute_QB withoutTrashed()
     * @method _IH_Attribute_QB restore()
     */
    class _IH_Attribute_QB extends _BaseBuilder {}
    
    /**
     * @method Category shift(int $count = 1)
     * @method Category pop(int $count = 1)
     * @method Category get($key, $default = null)
     * @method Category pull($key, $default = null)
     * @method Category first(callable $callback = null, $default = null)
     * @method Category firstWhere(string $key, $operator = null, $value = null)
     * @method Category find($key, $default = null)
     * @method Category[] all()
     * @method Category last(callable $callback = null, $default = null)
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereCategoryName($value)
     * @method _IH_Category_QB whereDeletedAt($value)
     * @method _IH_Category_QB whereCreatedAt($value)
     * @method _IH_Category_QB whereUpdatedAt($value)
     * @method _IH_Category_QB whereCategoryImageUrl($value)
     * @method _IH_Category_QB whereCategoryableId($value)
     * @method _IH_Category_QB whereCategoryableType($value)
     * @method _IH_Category_QB whereCategoryAdditionalUserId($value)
     * @method _IH_Category_QB whereCategoryAdditionalUserType($value)
     * @method _IH_Category_QB whereCategoryAcceptStatus($value)
     * @method _IH_Category_QB whereCategoryPublishStatus($value)
     * @method _IH_Category_QB whereCategoryShowStatus($value)
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null find($id, array $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Category findOrFail($id, array $columns = ['*'])
     * @method Category findOrNew($id, array $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Category_QB withTrashed()
     * @method _IH_Category_QB onlyTrashed()
     * @method _IH_Category_QB withoutTrashed()
     * @method _IH_Category_QB restore()
     */
    class _IH_Category_QB extends _BaseBuilder {}
    
    /**
     * @method ConfirmComment shift(int $count = 1)
     * @method ConfirmComment pop(int $count = 1)
     * @method ConfirmComment get($key, $default = null)
     * @method ConfirmComment pull($key, $default = null)
     * @method ConfirmComment first(callable $callback = null, $default = null)
     * @method ConfirmComment firstWhere(string $key, $operator = null, $value = null)
     * @method ConfirmComment find($key, $default = null)
     * @method ConfirmComment[] all()
     * @method ConfirmComment last(callable $callback = null, $default = null)
     */
    class _IH_ConfirmComment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ConfirmComment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method ConfirmComment baseSole(array|string $columns = ['*'])
     * @method ConfirmComment create(array $attributes = [])
     * @method _IH_ConfirmComment_C|ConfirmComment[] cursor()
     * @method ConfirmComment|null find($id, array $columns = ['*'])
     * @method _IH_ConfirmComment_C|ConfirmComment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ConfirmComment findOrFail($id, array $columns = ['*'])
     * @method ConfirmComment findOrNew($id, array $columns = ['*'])
     * @method ConfirmComment first(array|string $columns = ['*'])
     * @method ConfirmComment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ConfirmComment firstOrCreate(array $attributes = [], array $values = [])
     * @method ConfirmComment firstOrFail(array $columns = ['*'])
     * @method ConfirmComment firstOrNew(array $attributes = [], array $values = [])
     * @method ConfirmComment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ConfirmComment forceCreate(array $attributes)
     * @method _IH_ConfirmComment_C|ConfirmComment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ConfirmComment_C|ConfirmComment[] get(array|string $columns = ['*'])
     * @method ConfirmComment getModel()
     * @method ConfirmComment[] getModels(array|string $columns = ['*'])
     * @method _IH_ConfirmComment_C|ConfirmComment[] hydrate(array $items)
     * @method ConfirmComment make(array $attributes = [])
     * @method ConfirmComment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ConfirmComment[]|_IH_ConfirmComment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ConfirmComment[]|_IH_ConfirmComment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ConfirmComment sole(array|string $columns = ['*'])
     * @method ConfirmComment updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ConfirmComment_QB withTrashed()
     * @method _IH_ConfirmComment_QB onlyTrashed()
     * @method _IH_ConfirmComment_QB withoutTrashed()
     * @method _IH_ConfirmComment_QB restore()
     */
    class _IH_ConfirmComment_QB extends _BaseBuilder {}
    
    /**
     * @method CustomProduct shift(int $count = 1)
     * @method CustomProduct pop(int $count = 1)
     * @method CustomProduct get($key, $default = null)
     * @method CustomProduct pull($key, $default = null)
     * @method CustomProduct first(callable $callback = null, $default = null)
     * @method CustomProduct firstWhere(string $key, $operator = null, $value = null)
     * @method CustomProduct find($key, $default = null)
     * @method CustomProduct[] all()
     * @method CustomProduct last(callable $callback = null, $default = null)
     */
    class _IH_CustomProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CustomProduct_QB whereId($value)
     * @method _IH_CustomProduct_QB whereCustomProductName($value)
     * @method _IH_CustomProduct_QB whereCustomProductDescription($value)
     * @method _IH_CustomProduct_QB whereCustomProductInfo($value)
     * @method _IH_CustomProduct_QB whereCustomProductNote($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusAccept($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusConfirmUserId($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusConfirmUserComment($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusPublish($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusPublishDate($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPrice($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPriceDate($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusPriceDiscount($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPriceDiscountPercentage($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPriceDiscountType($value)
     * @method _IH_CustomProduct_QB whereCustomProductIndexImageUrl($value)
     * @method _IH_CustomProduct_QB whereCustomProductCategoryId($value)
     * @method _IH_CustomProduct_QB whereCustomProductCategoryName($value)
     * @method _IH_CustomProduct_QB whereCustomProductShopId($value)
     * @method _IH_CustomProduct_QB whereCustomProductRegistryShopkeeperId($value)
     * @method _IH_CustomProduct_QB whereCustomProductQuantityTotal($value)
     * @method _IH_CustomProduct_QB whereCustomProductQuantitySold($value)
     * @method _IH_CustomProduct_QB whereCustomProductQuantitySelling($value)
     * @method _IH_CustomProduct_QB whereCustomProductQuantityReturned($value)
     * @method _IH_CustomProduct_QB whereCustomProductNumberComments($value)
     * @method _IH_CustomProduct_QB whereCustomProductTotalPoints($value)
     * @method _IH_CustomProduct_QB whereCustomProductAveragePoints($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPoint($value)
     * @method _IH_CustomProduct_QB whereDeletedAt($value)
     * @method _IH_CustomProduct_QB whereCreatedAt($value)
     * @method _IH_CustomProduct_QB whereUpdatedAt($value)
     * @method CustomProduct baseSole(array|string $columns = ['*'])
     * @method CustomProduct create(array $attributes = [])
     * @method _IH_CustomProduct_C|CustomProduct[] cursor()
     * @method CustomProduct|null find($id, array $columns = ['*'])
     * @method _IH_CustomProduct_C|CustomProduct[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomProduct findOrFail($id, array $columns = ['*'])
     * @method CustomProduct findOrNew($id, array $columns = ['*'])
     * @method CustomProduct first(array|string $columns = ['*'])
     * @method CustomProduct firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomProduct firstOrFail(array $columns = ['*'])
     * @method CustomProduct firstOrNew(array $attributes = [], array $values = [])
     * @method CustomProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomProduct forceCreate(array $attributes)
     * @method _IH_CustomProduct_C|CustomProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomProduct_C|CustomProduct[] get(array|string $columns = ['*'])
     * @method CustomProduct getModel()
     * @method CustomProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomProduct_C|CustomProduct[] hydrate(array $items)
     * @method CustomProduct make(array $attributes = [])
     * @method CustomProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomProduct[]|_IH_CustomProduct_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomProduct[]|_IH_CustomProduct_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomProduct sole(array|string $columns = ['*'])
     * @method CustomProduct updateOrCreate(array $attributes, array $values = [])
     * @method _IH_CustomProduct_QB withTrashed()
     * @method _IH_CustomProduct_QB onlyTrashed()
     * @method _IH_CustomProduct_QB withoutTrashed()
     * @method _IH_CustomProduct_QB restore()
     */
    class _IH_CustomProduct_QB extends _BaseBuilder {}
    
    /**
     * @method CustomService shift(int $count = 1)
     * @method CustomService pop(int $count = 1)
     * @method CustomService get($key, $default = null)
     * @method CustomService pull($key, $default = null)
     * @method CustomService first(callable $callback = null, $default = null)
     * @method CustomService firstWhere(string $key, $operator = null, $value = null)
     * @method CustomService find($key, $default = null)
     * @method CustomService[] all()
     * @method CustomService last(callable $callback = null, $default = null)
     */
    class _IH_CustomService_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomService[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CustomService_QB whereId($value)
     * @method _IH_CustomService_QB whereCustomServicesName($value)
     * @method _IH_CustomService_QB whereCustomServicesDescription($value)
     * @method _IH_CustomService_QB whereCustomServicesInfo($value)
     * @method _IH_CustomService_QB whereCustomServicesNote($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusAccept($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusConfirmUserId($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusConfirmUserComment($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusPublish($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusPublishDate($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPrice($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPriceDate($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusPriceDiscount($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPriceDiscountPercentage($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPriceDiscountType($value)
     * @method _IH_CustomService_QB whereCustomServicesIndexImageUrl($value)
     * @method _IH_CustomService_QB whereCustomServicesCategoryId($value)
     * @method _IH_CustomService_QB whereCustomServicesCategoryName($value)
     * @method _IH_CustomService_QB whereCustomServicesShopId($value)
     * @method _IH_CustomService_QB whereCustomServicesRegistryShopkeeperId($value)
     * @method _IH_CustomService_QB whereCustomServicesQuantitySold($value)
     * @method _IH_CustomService_QB whereCustomServicesQuantitySelling($value)
     * @method _IH_CustomService_QB whereCustomServicesQuantityReturned($value)
     * @method _IH_CustomService_QB whereCustomServicesNumberComments($value)
     * @method _IH_CustomService_QB whereCustomServicesTotalPoints($value)
     * @method _IH_CustomService_QB whereCustomServicesAveragePoints($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPoint($value)
     * @method _IH_CustomService_QB whereDeletedAt($value)
     * @method _IH_CustomService_QB whereCreatedAt($value)
     * @method _IH_CustomService_QB whereUpdatedAt($value)
     * @method CustomService baseSole(array|string $columns = ['*'])
     * @method CustomService create(array $attributes = [])
     * @method _IH_CustomService_C|CustomService[] cursor()
     * @method CustomService|null find($id, array $columns = ['*'])
     * @method _IH_CustomService_C|CustomService[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomService findOrFail($id, array $columns = ['*'])
     * @method CustomService findOrNew($id, array $columns = ['*'])
     * @method CustomService first(array|string $columns = ['*'])
     * @method CustomService firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomService firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomService firstOrFail(array $columns = ['*'])
     * @method CustomService firstOrNew(array $attributes = [], array $values = [])
     * @method CustomService firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomService forceCreate(array $attributes)
     * @method _IH_CustomService_C|CustomService[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomService_C|CustomService[] get(array|string $columns = ['*'])
     * @method CustomService getModel()
     * @method CustomService[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomService_C|CustomService[] hydrate(array $items)
     * @method CustomService make(array $attributes = [])
     * @method CustomService newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomService[]|_IH_CustomService_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomService[]|_IH_CustomService_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomService sole(array|string $columns = ['*'])
     * @method CustomService updateOrCreate(array $attributes, array $values = [])
     * @method _IH_CustomService_QB withTrashed()
     * @method _IH_CustomService_QB onlyTrashed()
     * @method _IH_CustomService_QB withoutTrashed()
     * @method _IH_CustomService_QB restore()
     */
    class _IH_CustomService_QB extends _BaseBuilder {}
    
    /**
     * @method Detail shift(int $count = 1)
     * @method Detail pop(int $count = 1)
     * @method Detail get($key, $default = null)
     * @method Detail pull($key, $default = null)
     * @method Detail first(callable $callback = null, $default = null)
     * @method Detail firstWhere(string $key, $operator = null, $value = null)
     * @method Detail find($key, $default = null)
     * @method Detail[] all()
     * @method Detail last(callable $callback = null, $default = null)
     */
    class _IH_Detail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Detail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Detail_QB whereId($value)
     * @method _IH_Detail_QB whereNormalProductId($value)
     * @method _IH_Detail_QB whereNormalProductName($value)
     * @method _IH_Detail_QB whereNormalProductAttributeNameId($value)
     * @method _IH_Detail_QB whereNormalProductAttributeName($value)
     * @method _IH_Detail_QB whereNormalProductAttributeValueId($value)
     * @method _IH_Detail_QB whereNormalProductAttributeValue($value)
     * @method _IH_Detail_QB whereDeletedAt($value)
     * @method _IH_Detail_QB whereCreatedAt($value)
     * @method _IH_Detail_QB whereUpdatedAt($value)
     * @method _IH_Detail_QB whereType($value)
     * @method _IH_Detail_QB wherePriceId($value)
     * @method _IH_Detail_QB wherePriceValue($value)
     * @method Detail baseSole(array|string $columns = ['*'])
     * @method Detail create(array $attributes = [])
     * @method _IH_Detail_C|Detail[] cursor()
     * @method Detail|null find($id, array $columns = ['*'])
     * @method _IH_Detail_C|Detail[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Detail findOrFail($id, array $columns = ['*'])
     * @method Detail findOrNew($id, array $columns = ['*'])
     * @method Detail first(array|string $columns = ['*'])
     * @method Detail firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Detail firstOrCreate(array $attributes = [], array $values = [])
     * @method Detail firstOrFail(array $columns = ['*'])
     * @method Detail firstOrNew(array $attributes = [], array $values = [])
     * @method Detail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Detail forceCreate(array $attributes)
     * @method _IH_Detail_C|Detail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Detail_C|Detail[] get(array|string $columns = ['*'])
     * @method Detail getModel()
     * @method Detail[] getModels(array|string $columns = ['*'])
     * @method _IH_Detail_C|Detail[] hydrate(array $items)
     * @method Detail make(array $attributes = [])
     * @method Detail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Detail[]|_IH_Detail_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Detail[]|_IH_Detail_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Detail sole(array|string $columns = ['*'])
     * @method Detail updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Detail_QB withTrashed()
     * @method _IH_Detail_QB onlyTrashed()
     * @method _IH_Detail_QB withoutTrashed()
     * @method _IH_Detail_QB restore()
     */
    class _IH_Detail_QB extends _BaseBuilder {}
    
    /**
     * @method Membership shift(int $count = 1)
     * @method Membership pop(int $count = 1)
     * @method Membership get($key, $default = null)
     * @method Membership pull($key, $default = null)
     * @method Membership first(callable $callback = null, $default = null)
     * @method Membership firstWhere(string $key, $operator = null, $value = null)
     * @method Membership find($key, $default = null)
     * @method Membership[] all()
     * @method Membership last(callable $callback = null, $default = null)
     */
    class _IH_Membership_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Membership[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Membership baseSole(array|string $columns = ['*'])
     * @method Membership create(array $attributes = [])
     * @method _IH_Membership_C|Membership[] cursor()
     * @method Membership|null find($id, array $columns = ['*'])
     * @method _IH_Membership_C|Membership[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Membership findOrFail($id, array $columns = ['*'])
     * @method Membership findOrNew($id, array $columns = ['*'])
     * @method Membership first(array|string $columns = ['*'])
     * @method Membership firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Membership firstOrCreate(array $attributes = [], array $values = [])
     * @method Membership firstOrFail(array $columns = ['*'])
     * @method Membership firstOrNew(array $attributes = [], array $values = [])
     * @method Membership firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Membership forceCreate(array $attributes)
     * @method _IH_Membership_C|Membership[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Membership_C|Membership[] get(array|string $columns = ['*'])
     * @method Membership getModel()
     * @method Membership[] getModels(array|string $columns = ['*'])
     * @method _IH_Membership_C|Membership[] hydrate(array $items)
     * @method Membership make(array $attributes = [])
     * @method Membership newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Membership[]|_IH_Membership_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Membership[]|_IH_Membership_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Membership sole(array|string $columns = ['*'])
     * @method Membership updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Membership_QB extends _BaseBuilder {}
    
    /**
     * @method NormalProduct shift(int $count = 1)
     * @method NormalProduct pop(int $count = 1)
     * @method NormalProduct get($key, $default = null)
     * @method NormalProduct pull($key, $default = null)
     * @method NormalProduct first(callable $callback = null, $default = null)
     * @method NormalProduct firstWhere(string $key, $operator = null, $value = null)
     * @method NormalProduct find($key, $default = null)
     * @method NormalProduct[] all()
     * @method NormalProduct last(callable $callback = null, $default = null)
     */
    class _IH_NormalProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NormalProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NormalProduct_QB whereId($value)
     * @method _IH_NormalProduct_QB whereProductName($value)
     * @method _IH_NormalProduct_QB whereProductDescription($value)
     * @method _IH_NormalProduct_QB whereProductInfo($value)
     * @method _IH_NormalProduct_QB whereProductNote($value)
     * @method _IH_NormalProduct_QB whereProductStatusAccept($value)
     * @method _IH_NormalProduct_QB whereProductStatusConfirmUserId($value)
     * @method _IH_NormalProduct_QB whereProductStatusConfirmUserComment($value)
     * @method _IH_NormalProduct_QB whereProductStatusPublish($value)
     * @method _IH_NormalProduct_QB whereProductStatusPublishDate($value)
     * @method _IH_NormalProduct_QB whereProductLastPrice($value)
     * @method _IH_NormalProduct_QB whereProductLastPriceDate($value)
     * @method _IH_NormalProduct_QB whereProductStatusPriceDiscount($value)
     * @method _IH_NormalProduct_QB whereProductLastPriceDiscountPercentage($value)
     * @method _IH_NormalProduct_QB whereProductLastPriceDiscountType($value)
     * @method _IH_NormalProduct_QB whereProductIndexImageUrl($value)
     * @method _IH_NormalProduct_QB whereProductCategoryId($value)
     * @method _IH_NormalProduct_QB whereProductShopId($value)
     * @method _IH_NormalProduct_QB whereProductRegistryShopkeeperId($value)
     * @method _IH_NormalProduct_QB whereProductQuantityTotal($value)
     * @method _IH_NormalProduct_QB whereProductQuantitySold($value)
     * @method _IH_NormalProduct_QB whereProductQuantitySelling($value)
     * @method _IH_NormalProduct_QB whereProductQuantityReturned($value)
     * @method _IH_NormalProduct_QB whereProductNumberComments($value)
     * @method _IH_NormalProduct_QB whereProductTotalPoints($value)
     * @method _IH_NormalProduct_QB whereProductAveragePoints($value)
     * @method _IH_NormalProduct_QB whereProductLastPoint($value)
     * @method _IH_NormalProduct_QB whereDeletedAt($value)
     * @method _IH_NormalProduct_QB whereCreatedAt($value)
     * @method _IH_NormalProduct_QB whereUpdatedAt($value)
     * @method _IH_NormalProduct_QB whereProductCategoryName($value)
     * @method NormalProduct baseSole(array|string $columns = ['*'])
     * @method NormalProduct create(array $attributes = [])
     * @method _IH_NormalProduct_C|NormalProduct[] cursor()
     * @method NormalProduct|null find($id, array $columns = ['*'])
     * @method _IH_NormalProduct_C|NormalProduct[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method NormalProduct findOrFail($id, array $columns = ['*'])
     * @method NormalProduct findOrNew($id, array $columns = ['*'])
     * @method NormalProduct first(array|string $columns = ['*'])
     * @method NormalProduct firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method NormalProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method NormalProduct firstOrFail(array $columns = ['*'])
     * @method NormalProduct firstOrNew(array $attributes = [], array $values = [])
     * @method NormalProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NormalProduct forceCreate(array $attributes)
     * @method _IH_NormalProduct_C|NormalProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NormalProduct_C|NormalProduct[] get(array|string $columns = ['*'])
     * @method NormalProduct getModel()
     * @method NormalProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_NormalProduct_C|NormalProduct[] hydrate(array $items)
     * @method NormalProduct make(array $attributes = [])
     * @method NormalProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NormalProduct[]|_IH_NormalProduct_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|NormalProduct[]|_IH_NormalProduct_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NormalProduct sole(array|string $columns = ['*'])
     * @method NormalProduct updateOrCreate(array $attributes, array $values = [])
     * @method _IH_NormalProduct_QB withTrashed()
     * @method _IH_NormalProduct_QB onlyTrashed()
     * @method _IH_NormalProduct_QB withoutTrashed()
     * @method _IH_NormalProduct_QB restore()
     */
    class _IH_NormalProduct_QB extends _BaseBuilder {}
    
    /**
     * @method NormalService shift(int $count = 1)
     * @method NormalService pop(int $count = 1)
     * @method NormalService get($key, $default = null)
     * @method NormalService pull($key, $default = null)
     * @method NormalService first(callable $callback = null, $default = null)
     * @method NormalService firstWhere(string $key, $operator = null, $value = null)
     * @method NormalService find($key, $default = null)
     * @method NormalService[] all()
     * @method NormalService last(callable $callback = null, $default = null)
     */
    class _IH_NormalService_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NormalService[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NormalService_QB whereId($value)
     * @method _IH_NormalService_QB whereNormalServiceName($value)
     * @method _IH_NormalService_QB whereNormalServiceTimespanByMinutes($value)
     * @method _IH_NormalService_QB whereNormalServiceNumberSessions($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPrice($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPriceDate($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusPriceDiscount($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPriceDiscountPercentage($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPriceDiscountType($value)
     * @method _IH_NormalService_QB whereNormalServiceIndexImageUrl($value)
     * @method _IH_NormalService_QB whereNormalServiceCategoryId($value)
     * @method _IH_NormalService_QB whereNormalServiceCategoryName($value)
     * @method _IH_NormalService_QB whereNormalServiceShopId($value)
     * @method _IH_NormalService_QB whereNormalServiceRegistryShopkeeperId($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusAccept($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusConfirmUserId($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusConfirmUserComment($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusPublish($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusPublishDate($value)
     * @method _IH_NormalService_QB whereNormalServiceNumberComments($value)
     * @method _IH_NormalService_QB whereNormalServiceTotalPoints($value)
     * @method _IH_NormalService_QB whereNormalServiceAveragePoints($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPoint($value)
     * @method _IH_NormalService_QB whereDeletedAt($value)
     * @method _IH_NormalService_QB whereCreatedAt($value)
     * @method _IH_NormalService_QB whereUpdatedAt($value)
     * @method NormalService baseSole(array|string $columns = ['*'])
     * @method NormalService create(array $attributes = [])
     * @method _IH_NormalService_C|NormalService[] cursor()
     * @method NormalService|null find($id, array $columns = ['*'])
     * @method _IH_NormalService_C|NormalService[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method NormalService findOrFail($id, array $columns = ['*'])
     * @method NormalService findOrNew($id, array $columns = ['*'])
     * @method NormalService first(array|string $columns = ['*'])
     * @method NormalService firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method NormalService firstOrCreate(array $attributes = [], array $values = [])
     * @method NormalService firstOrFail(array $columns = ['*'])
     * @method NormalService firstOrNew(array $attributes = [], array $values = [])
     * @method NormalService firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NormalService forceCreate(array $attributes)
     * @method _IH_NormalService_C|NormalService[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NormalService_C|NormalService[] get(array|string $columns = ['*'])
     * @method NormalService getModel()
     * @method NormalService[] getModels(array|string $columns = ['*'])
     * @method _IH_NormalService_C|NormalService[] hydrate(array $items)
     * @method NormalService make(array $attributes = [])
     * @method NormalService newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NormalService[]|_IH_NormalService_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|NormalService[]|_IH_NormalService_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NormalService sole(array|string $columns = ['*'])
     * @method NormalService updateOrCreate(array $attributes, array $values = [])
     * @method _IH_NormalService_QB withTrashed()
     * @method _IH_NormalService_QB onlyTrashed()
     * @method _IH_NormalService_QB withoutTrashed()
     * @method _IH_NormalService_QB restore()
     */
    class _IH_NormalService_QB extends _BaseBuilder {}
    
    /**
     * @method ProductCategory shift(int $count = 1)
     * @method ProductCategory pop(int $count = 1)
     * @method ProductCategory get($key, $default = null)
     * @method ProductCategory pull($key, $default = null)
     * @method ProductCategory first(callable $callback = null, $default = null)
     * @method ProductCategory firstWhere(string $key, $operator = null, $value = null)
     * @method ProductCategory find($key, $default = null)
     * @method ProductCategory[] all()
     * @method ProductCategory last(callable $callback = null, $default = null)
     */
    class _IH_ProductCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductCategory_QB whereId($value)
     * @method _IH_ProductCategory_QB whereProductCategoryName($value)
     * @method _IH_ProductCategory_QB whereProductCategoryImageUrl($value)
     * @method _IH_ProductCategory_QB whereProductCategoryableId($value)
     * @method _IH_ProductCategory_QB whereProductCategoryableType($value)
     * @method _IH_ProductCategory_QB whereProductCategoryAdditionalUserId($value)
     * @method _IH_ProductCategory_QB whereProductCategoryAdditionalUserType($value)
     * @method _IH_ProductCategory_QB whereProductCategoryAcceptStatus($value)
     * @method _IH_ProductCategory_QB whereProductCategoryPublishStatus($value)
     * @method _IH_ProductCategory_QB whereProductCategoryShowStatus($value)
     * @method _IH_ProductCategory_QB whereDeletedAt($value)
     * @method _IH_ProductCategory_QB whereCreatedAt($value)
     * @method _IH_ProductCategory_QB whereUpdatedAt($value)
     * @method _IH_ProductCategory_QB whereParentId($value)
     * @method ProductCategory baseSole(array|string $columns = ['*'])
     * @method ProductCategory create(array $attributes = [])
     * @method _IH_ProductCategory_C|ProductCategory[] cursor()
     * @method ProductCategory|null find($id, array $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductCategory findOrFail($id, array $columns = ['*'])
     * @method ProductCategory findOrNew($id, array $columns = ['*'])
     * @method ProductCategory first(array|string $columns = ['*'])
     * @method ProductCategory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCategory firstOrFail(array $columns = ['*'])
     * @method ProductCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCategory forceCreate(array $attributes)
     * @method _IH_ProductCategory_C|ProductCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCategory_C|ProductCategory[] get(array|string $columns = ['*'])
     * @method ProductCategory getModel()
     * @method ProductCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] hydrate(array $items)
     * @method ProductCategory make(array $attributes = [])
     * @method ProductCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCategory[]|_IH_ProductCategory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCategory[]|_IH_ProductCategory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCategory sole(array|string $columns = ['*'])
     * @method ProductCategory updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductCategory_QB withTrashed()
     * @method _IH_ProductCategory_QB onlyTrashed()
     * @method _IH_ProductCategory_QB withoutTrashed()
     * @method _IH_ProductCategory_QB restore()
     */
    class _IH_ProductCategory_QB extends _BaseBuilder {}
    
    /**
     * @method ProductCustomerComments shift(int $count = 1)
     * @method ProductCustomerComments pop(int $count = 1)
     * @method ProductCustomerComments get($key, $default = null)
     * @method ProductCustomerComments pull($key, $default = null)
     * @method ProductCustomerComments first(callable $callback = null, $default = null)
     * @method ProductCustomerComments firstWhere(string $key, $operator = null, $value = null)
     * @method ProductCustomerComments find($key, $default = null)
     * @method ProductCustomerComments[] all()
     * @method ProductCustomerComments last(callable $callback = null, $default = null)
     */
    class _IH_ProductCustomerComments_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCustomerComments[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductCustomerComments_QB whereId($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerComment($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerRate($value)
     * @method _IH_ProductCustomerComments_QB whereUserId($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerRateWeightType($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerRateWeight($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerLastSumRate($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerLastAverageRate($value)
     * @method _IH_ProductCustomerComments_QB whereProductCommentableId($value)
     * @method _IH_ProductCustomerComments_QB whereProductCommentableType($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerCommentAccessStatus($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerCommentStatus($value)
     * @method _IH_ProductCustomerComments_QB whereDeletedAt($value)
     * @method _IH_ProductCustomerComments_QB whereCreatedAt($value)
     * @method _IH_ProductCustomerComments_QB whereUpdatedAt($value)
     * @method ProductCustomerComments baseSole(array|string $columns = ['*'])
     * @method ProductCustomerComments create(array $attributes = [])
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] cursor()
     * @method ProductCustomerComments|null find($id, array $columns = ['*'])
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductCustomerComments findOrFail($id, array $columns = ['*'])
     * @method ProductCustomerComments findOrNew($id, array $columns = ['*'])
     * @method ProductCustomerComments first(array|string $columns = ['*'])
     * @method ProductCustomerComments firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductCustomerComments firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCustomerComments firstOrFail(array $columns = ['*'])
     * @method ProductCustomerComments firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCustomerComments firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCustomerComments forceCreate(array $attributes)
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] get(array|string $columns = ['*'])
     * @method ProductCustomerComments getModel()
     * @method ProductCustomerComments[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] hydrate(array $items)
     * @method ProductCustomerComments make(array $attributes = [])
     * @method ProductCustomerComments newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCustomerComments[]|_IH_ProductCustomerComments_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCustomerComments[]|_IH_ProductCustomerComments_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCustomerComments sole(array|string $columns = ['*'])
     * @method ProductCustomerComments updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductCustomerComments_QB withTrashed()
     * @method _IH_ProductCustomerComments_QB onlyTrashed()
     * @method _IH_ProductCustomerComments_QB withoutTrashed()
     * @method _IH_ProductCustomerComments_QB restore()
     */
    class _IH_ProductCustomerComments_QB extends _BaseBuilder {}
    
    /**
     * @method ProductImage shift(int $count = 1)
     * @method ProductImage pop(int $count = 1)
     * @method ProductImage get($key, $default = null)
     * @method ProductImage pull($key, $default = null)
     * @method ProductImage first(callable $callback = null, $default = null)
     * @method ProductImage firstWhere(string $key, $operator = null, $value = null)
     * @method ProductImage find($key, $default = null)
     * @method ProductImage[] all()
     * @method ProductImage last(callable $callback = null, $default = null)
     */
    class _IH_ProductImage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductImage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method ProductImage baseSole(array|string $columns = ['*'])
     * @method ProductImage create(array $attributes = [])
     * @method _IH_ProductImage_C|ProductImage[] cursor()
     * @method ProductImage|null find($id, array $columns = ['*'])
     * @method _IH_ProductImage_C|ProductImage[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductImage findOrFail($id, array $columns = ['*'])
     * @method ProductImage findOrNew($id, array $columns = ['*'])
     * @method ProductImage first(array|string $columns = ['*'])
     * @method ProductImage firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductImage firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductImage firstOrFail(array $columns = ['*'])
     * @method ProductImage firstOrNew(array $attributes = [], array $values = [])
     * @method ProductImage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductImage forceCreate(array $attributes)
     * @method _IH_ProductImage_C|ProductImage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductImage_C|ProductImage[] get(array|string $columns = ['*'])
     * @method ProductImage getModel()
     * @method ProductImage[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductImage_C|ProductImage[] hydrate(array $items)
     * @method ProductImage make(array $attributes = [])
     * @method ProductImage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductImage[]|_IH_ProductImage_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductImage[]|_IH_ProductImage_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductImage sole(array|string $columns = ['*'])
     * @method ProductImage updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductImage_QB withTrashed()
     * @method _IH_ProductImage_QB onlyTrashed()
     * @method _IH_ProductImage_QB withoutTrashed()
     * @method _IH_ProductImage_QB restore()
     */
    class _IH_ProductImage_QB extends _BaseBuilder {}
    
    /**
     * @method ProductTag shift(int $count = 1)
     * @method ProductTag pop(int $count = 1)
     * @method ProductTag get($key, $default = null)
     * @method ProductTag pull($key, $default = null)
     * @method ProductTag first(callable $callback = null, $default = null)
     * @method ProductTag firstWhere(string $key, $operator = null, $value = null)
     * @method ProductTag find($key, $default = null)
     * @method ProductTag[] all()
     * @method ProductTag last(callable $callback = null, $default = null)
     */
    class _IH_ProductTag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductTag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductTag_QB whereId($value)
     * @method _IH_ProductTag_QB whereProductTagName($value)
     * @method _IH_ProductTag_QB whereProductTagImageUrl($value)
     * @method _IH_ProductTag_QB whereProductTagPublishStatus($value)
     * @method _IH_ProductTag_QB whereProductTagAcceptStatus($value)
     * @method _IH_ProductTag_QB whereProductTagAdditionalType($value)
     * @method _IH_ProductTag_QB whereProductTagAdditionalUserId($value)
     * @method _IH_ProductTag_QB whereDeletedAt($value)
     * @method _IH_ProductTag_QB whereCreatedAt($value)
     * @method _IH_ProductTag_QB whereUpdatedAt($value)
     * @method ProductTag baseSole(array|string $columns = ['*'])
     * @method ProductTag create(array $attributes = [])
     * @method _IH_ProductTag_C|ProductTag[] cursor()
     * @method ProductTag|null find($id, array $columns = ['*'])
     * @method _IH_ProductTag_C|ProductTag[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductTag findOrFail($id, array $columns = ['*'])
     * @method ProductTag findOrNew($id, array $columns = ['*'])
     * @method ProductTag first(array|string $columns = ['*'])
     * @method ProductTag firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductTag firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductTag firstOrFail(array $columns = ['*'])
     * @method ProductTag firstOrNew(array $attributes = [], array $values = [])
     * @method ProductTag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductTag forceCreate(array $attributes)
     * @method _IH_ProductTag_C|ProductTag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductTag_C|ProductTag[] get(array|string $columns = ['*'])
     * @method ProductTag getModel()
     * @method ProductTag[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductTag_C|ProductTag[] hydrate(array $items)
     * @method ProductTag make(array $attributes = [])
     * @method ProductTag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductTag[]|_IH_ProductTag_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductTag[]|_IH_ProductTag_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTag sole(array|string $columns = ['*'])
     * @method ProductTag updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductTag_QB withTrashed()
     * @method _IH_ProductTag_QB onlyTrashed()
     * @method _IH_ProductTag_QB withoutTrashed()
     * @method _IH_ProductTag_QB restore()
     */
    class _IH_ProductTag_QB extends _BaseBuilder {}
    
    /**
     * @method RolesShopsUsers shift(int $count = 1)
     * @method RolesShopsUsers pop(int $count = 1)
     * @method RolesShopsUsers get($key, $default = null)
     * @method RolesShopsUsers pull($key, $default = null)
     * @method RolesShopsUsers first(callable $callback = null, $default = null)
     * @method RolesShopsUsers firstWhere(string $key, $operator = null, $value = null)
     * @method RolesShopsUsers find($key, $default = null)
     * @method RolesShopsUsers[] all()
     * @method RolesShopsUsers last(callable $callback = null, $default = null)
     */
    class _IH_RolesShopsUsers_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RolesShopsUsers[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_RolesShopsUsers_QB whereUserId($value)
     * @method _IH_RolesShopsUsers_QB whereRoleId($value)
     * @method _IH_RolesShopsUsers_QB whereShopId($value)
     * @method _IH_RolesShopsUsers_QB whereDeletedAt($value)
     * @method _IH_RolesShopsUsers_QB whereShopType($value)
     * @method RolesShopsUsers baseSole(array|string $columns = ['*'])
     * @method RolesShopsUsers create(array $attributes = [])
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] cursor()
     * @method RolesShopsUsers|null find($id, array $columns = ['*'])
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RolesShopsUsers findOrFail($id, array $columns = ['*'])
     * @method RolesShopsUsers findOrNew($id, array $columns = ['*'])
     * @method RolesShopsUsers first(array|string $columns = ['*'])
     * @method RolesShopsUsers firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RolesShopsUsers firstOrCreate(array $attributes = [], array $values = [])
     * @method RolesShopsUsers firstOrFail(array $columns = ['*'])
     * @method RolesShopsUsers firstOrNew(array $attributes = [], array $values = [])
     * @method RolesShopsUsers firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RolesShopsUsers forceCreate(array $attributes)
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] get(array|string $columns = ['*'])
     * @method RolesShopsUsers getModel()
     * @method RolesShopsUsers[] getModels(array|string $columns = ['*'])
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] hydrate(array $items)
     * @method RolesShopsUsers make(array $attributes = [])
     * @method RolesShopsUsers newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RolesShopsUsers[]|_IH_RolesShopsUsers_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RolesShopsUsers[]|_IH_RolesShopsUsers_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RolesShopsUsers sole(array|string $columns = ['*'])
     * @method RolesShopsUsers updateOrCreate(array $attributes, array $values = [])
     * @method _IH_RolesShopsUsers_QB withTrashed()
     * @method _IH_RolesShopsUsers_QB onlyTrashed()
     * @method _IH_RolesShopsUsers_QB withoutTrashed()
     * @method _IH_RolesShopsUsers_QB restore()
     */
    class _IH_RolesShopsUsers_QB extends _BaseBuilder {}
    
    /**
     * @method Shop shift(int $count = 1)
     * @method Shop pop(int $count = 1)
     * @method Shop get($key, $default = null)
     * @method Shop pull($key, $default = null)
     * @method Shop first(callable $callback = null, $default = null)
     * @method Shop firstWhere(string $key, $operator = null, $value = null)
     * @method Shop find($key, $default = null)
     * @method Shop[] all()
     * @method Shop last(callable $callback = null, $default = null)
     */
    class _IH_Shop_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Shop[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Shop_QB whereId($value)
     * @method _IH_Shop_QB whereParentId($value)
     * @method _IH_Shop_QB whereName($value)
     * @method _IH_Shop_QB whereCreatedAt($value)
     * @method _IH_Shop_QB whereUpdatedAt($value)
     * @method _IH_Shop_QB whereDeletedAt($value)
     * @method _IH_Shop_QB whereCategoryId($value)
     * @method _IH_Shop_QB whereDescription($value)
     * @method _IH_Shop_QB whereShopPhotoUrl($value)
     * @method _IH_Shop_QB whereTypeLocation($value)
     * @method _IH_Shop_QB whereLatLocation($value)
     * @method _IH_Shop_QB whereLongLocation($value)
     * @method _IH_Shop_QB whereShopCountry($value)
     * @method _IH_Shop_QB whereShopProvince($value)
     * @method _IH_Shop_QB whereShopCity($value)
     * @method _IH_Shop_QB whereShopLocal($value)
     * @method _IH_Shop_QB whereShopStreet($value)
     * @method _IH_Shop_QB whereShopAlley($value)
     * @method _IH_Shop_QB whereShopNumber($value)
     * @method _IH_Shop_QB whereShopPostalCode($value)
     * @method _IH_Shop_QB whereShopMainPhoneNumber($value)
     * @method _IH_Shop_QB whereShopAcceptStatus($value)
     * @method _IH_Shop_QB whereShopPriority($value)
     * @method Shop baseSole(array|string $columns = ['*'])
     * @method Shop create(array $attributes = [])
     * @method _IH_Shop_C|Shop[] cursor()
     * @method Shop|null find($id, array $columns = ['*'])
     * @method _IH_Shop_C|Shop[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Shop findOrFail($id, array $columns = ['*'])
     * @method Shop findOrNew($id, array $columns = ['*'])
     * @method Shop first(array|string $columns = ['*'])
     * @method Shop firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Shop firstOrCreate(array $attributes = [], array $values = [])
     * @method Shop firstOrFail(array $columns = ['*'])
     * @method Shop firstOrNew(array $attributes = [], array $values = [])
     * @method Shop firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Shop forceCreate(array $attributes)
     * @method _IH_Shop_C|Shop[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Shop_C|Shop[] get(array|string $columns = ['*'])
     * @method Shop getModel()
     * @method Shop[] getModels(array|string $columns = ['*'])
     * @method _IH_Shop_C|Shop[] hydrate(array $items)
     * @method Shop make(array $attributes = [])
     * @method Shop newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Shop[]|_IH_Shop_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Shop[]|_IH_Shop_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Shop sole(array|string $columns = ['*'])
     * @method Shop updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Shop_QB withTrashed()
     * @method _IH_Shop_QB onlyTrashed()
     * @method _IH_Shop_QB withoutTrashed()
     * @method _IH_Shop_QB restore()
     */
    class _IH_Shop_QB extends _BaseBuilder {}
    
    /**
     * @method Tag shift(int $count = 1)
     * @method Tag pop(int $count = 1)
     * @method Tag get($key, $default = null)
     * @method Tag pull($key, $default = null)
     * @method Tag first(callable $callback = null, $default = null)
     * @method Tag firstWhere(string $key, $operator = null, $value = null)
     * @method Tag find($key, $default = null)
     * @method Tag[] all()
     * @method Tag last(callable $callback = null, $default = null)
     */
    class _IH_Tag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Tag_QB whereId($value)
     * @method _IH_Tag_QB whereTagName($value)
     * @method _IH_Tag_QB whereTagAcceptStatus($value)
     * @method _IH_Tag_QB whereDeletedAt($value)
     * @method _IH_Tag_QB whereCreatedAt($value)
     * @method _IH_Tag_QB whereUpdatedAt($value)
     * @method _IH_Tag_QB whereTagImageUrl($value)
     * @method _IH_Tag_QB whereTagPublishStatus($value)
     * @method _IH_Tag_QB whereTagAdditionalType($value)
     * @method _IH_Tag_QB whereTagAdditionalUserId($value)
     * @method Tag baseSole(array|string $columns = ['*'])
     * @method Tag create(array $attributes = [])
     * @method _IH_Tag_C|Tag[] cursor()
     * @method Tag|null find($id, array $columns = ['*'])
     * @method _IH_Tag_C|Tag[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Tag findOrFail($id, array $columns = ['*'])
     * @method Tag findOrNew($id, array $columns = ['*'])
     * @method Tag first(array|string $columns = ['*'])
     * @method Tag firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Tag firstOrCreate(array $attributes = [], array $values = [])
     * @method Tag firstOrFail(array $columns = ['*'])
     * @method Tag firstOrNew(array $attributes = [], array $values = [])
     * @method Tag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tag forceCreate(array $attributes)
     * @method _IH_Tag_C|Tag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tag_C|Tag[] get(array|string $columns = ['*'])
     * @method Tag getModel()
     * @method Tag[] getModels(array|string $columns = ['*'])
     * @method _IH_Tag_C|Tag[] hydrate(array $items)
     * @method Tag make(array $attributes = [])
     * @method Tag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tag[]|_IH_Tag_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tag[]|_IH_Tag_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tag sole(array|string $columns = ['*'])
     * @method Tag updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Tag_QB withTrashed()
     * @method _IH_Tag_QB onlyTrashed()
     * @method _IH_Tag_QB withoutTrashed()
     * @method _IH_Tag_QB restore()
     */
    class _IH_Tag_QB extends _BaseBuilder {}
    
    /**
     * @method Tasks shift(int $count = 1)
     * @method Tasks pop(int $count = 1)
     * @method Tasks get($key, $default = null)
     * @method Tasks pull($key, $default = null)
     * @method Tasks first(callable $callback = null, $default = null)
     * @method Tasks firstWhere(string $key, $operator = null, $value = null)
     * @method Tasks find($key, $default = null)
     * @method Tasks[] all()
     * @method Tasks last(callable $callback = null, $default = null)
     */
    class _IH_Tasks_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tasks[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Tasks_QB whereId($value)
     * @method _IH_Tasks_QB whereTaskName($value)
     * @method _IH_Tasks_QB whereTaskDescription($value)
     * @method _IH_Tasks_QB whereTaskInfo($value)
     * @method _IH_Tasks_QB whereTaskNote($value)
     * @method _IH_Tasks_QB whereTaskStatusAccept($value)
     * @method _IH_Tasks_QB whereTaskStatusConfirmUserId($value)
     * @method _IH_Tasks_QB whereCustomServicesId($value)
     * @method _IH_Tasks_QB whereTaskStatusConfirmUserComment($value)
     * @method _IH_Tasks_QB whereTaskStatusPublish($value)
     * @method _IH_Tasks_QB whereTaskStatusPublishDate($value)
     * @method _IH_Tasks_QB whereTaskLastBasePrice($value)
     * @method _IH_Tasks_QB whereTaskLastBasePriceDate($value)
     * @method _IH_Tasks_QB whereTaskStatusBasePriceDiscount($value)
     * @method _IH_Tasks_QB whereTaskLastBasePriceDiscountPercentage($value)
     * @method _IH_Tasks_QB whereTaskLastBasePriceDiscountType($value)
     * @method _IH_Tasks_QB whereTaskUnitOfMeasurementId($value)
     * @method _IH_Tasks_QB whereTaskUnitOfMeasurementName($value)
     * @method _IH_Tasks_QB whereTaskIndexImageUrl($value)
     * @method _IH_Tasks_QB whereTaskCategoryId($value)
     * @method _IH_Tasks_QB whereTaskCategoryName($value)
     * @method _IH_Tasks_QB whereTaskShopId($value)
     * @method _IH_Tasks_QB whereTaskRegistryShopkeeperId($value)
     * @method _IH_Tasks_QB whereTaskQuantitySold($value)
     * @method _IH_Tasks_QB whereTaskQuantitySelling($value)
     * @method _IH_Tasks_QB whereTaskQuantityReturned($value)
     * @method _IH_Tasks_QB whereTaskNumberComments($value)
     * @method _IH_Tasks_QB whereTaskTotalPoints($value)
     * @method _IH_Tasks_QB whereTaskAveragePoints($value)
     * @method _IH_Tasks_QB whereTaskLastPoint($value)
     * @method _IH_Tasks_QB whereDeletedAt($value)
     * @method _IH_Tasks_QB whereCreatedAt($value)
     * @method _IH_Tasks_QB whereUpdatedAt($value)
     * @method Tasks baseSole(array|string $columns = ['*'])
     * @method Tasks create(array $attributes = [])
     * @method _IH_Tasks_C|Tasks[] cursor()
     * @method Tasks|null find($id, array $columns = ['*'])
     * @method _IH_Tasks_C|Tasks[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Tasks findOrFail($id, array $columns = ['*'])
     * @method Tasks findOrNew($id, array $columns = ['*'])
     * @method Tasks first(array|string $columns = ['*'])
     * @method Tasks firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Tasks firstOrCreate(array $attributes = [], array $values = [])
     * @method Tasks firstOrFail(array $columns = ['*'])
     * @method Tasks firstOrNew(array $attributes = [], array $values = [])
     * @method Tasks firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tasks forceCreate(array $attributes)
     * @method _IH_Tasks_C|Tasks[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tasks_C|Tasks[] get(array|string $columns = ['*'])
     * @method Tasks getModel()
     * @method Tasks[] getModels(array|string $columns = ['*'])
     * @method _IH_Tasks_C|Tasks[] hydrate(array $items)
     * @method Tasks make(array $attributes = [])
     * @method Tasks newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tasks[]|_IH_Tasks_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tasks[]|_IH_Tasks_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tasks sole(array|string $columns = ['*'])
     * @method Tasks updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Tasks_QB withTrashed()
     * @method _IH_Tasks_QB onlyTrashed()
     * @method _IH_Tasks_QB withoutTrashed()
     * @method _IH_Tasks_QB restore()
     */
    class _IH_Tasks_QB extends _BaseBuilder {}
    
    /**
     * @method TeamInvitation shift(int $count = 1)
     * @method TeamInvitation pop(int $count = 1)
     * @method TeamInvitation get($key, $default = null)
     * @method TeamInvitation pull($key, $default = null)
     * @method TeamInvitation first(callable $callback = null, $default = null)
     * @method TeamInvitation firstWhere(string $key, $operator = null, $value = null)
     * @method TeamInvitation find($key, $default = null)
     * @method TeamInvitation[] all()
     * @method TeamInvitation last(callable $callback = null, $default = null)
     */
    class _IH_TeamInvitation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TeamInvitation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method TeamInvitation baseSole(array|string $columns = ['*'])
     * @method TeamInvitation create(array $attributes = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] cursor()
     * @method TeamInvitation|null find($id, array $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TeamInvitation findOrFail($id, array $columns = ['*'])
     * @method TeamInvitation findOrNew($id, array $columns = ['*'])
     * @method TeamInvitation first(array|string $columns = ['*'])
     * @method TeamInvitation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method TeamInvitation firstOrCreate(array $attributes = [], array $values = [])
     * @method TeamInvitation firstOrFail(array $columns = ['*'])
     * @method TeamInvitation firstOrNew(array $attributes = [], array $values = [])
     * @method TeamInvitation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TeamInvitation forceCreate(array $attributes)
     * @method _IH_TeamInvitation_C|TeamInvitation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] get(array|string $columns = ['*'])
     * @method TeamInvitation getModel()
     * @method TeamInvitation[] getModels(array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] hydrate(array $items)
     * @method TeamInvitation make(array $attributes = [])
     * @method TeamInvitation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TeamInvitation[]|_IH_TeamInvitation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TeamInvitation[]|_IH_TeamInvitation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TeamInvitation sole(array|string $columns = ['*'])
     * @method TeamInvitation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TeamInvitation_QB extends _BaseBuilder {}
    
    /**
     * @method Team shift(int $count = 1)
     * @method Team pop(int $count = 1)
     * @method Team get($key, $default = null)
     * @method Team pull($key, $default = null)
     * @method Team first(callable $callback = null, $default = null)
     * @method Team firstWhere(string $key, $operator = null, $value = null)
     * @method Team find($key, $default = null)
     * @method Team[] all()
     * @method Team last(callable $callback = null, $default = null)
     */
    class _IH_Team_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Team[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Team baseSole(array|string $columns = ['*'])
     * @method Team create(array $attributes = [])
     * @method _IH_Team_C|Team[] cursor()
     * @method Team|null find($id, array $columns = ['*'])
     * @method _IH_Team_C|Team[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Team findOrFail($id, array $columns = ['*'])
     * @method Team findOrNew($id, array $columns = ['*'])
     * @method Team first(array|string $columns = ['*'])
     * @method Team firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Team firstOrCreate(array $attributes = [], array $values = [])
     * @method Team firstOrFail(array $columns = ['*'])
     * @method Team firstOrNew(array $attributes = [], array $values = [])
     * @method Team firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Team forceCreate(array $attributes)
     * @method _IH_Team_C|Team[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Team_C|Team[] get(array|string $columns = ['*'])
     * @method Team getModel()
     * @method Team[] getModels(array|string $columns = ['*'])
     * @method _IH_Team_C|Team[] hydrate(array $items)
     * @method Team make(array $attributes = [])
     * @method Team newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Team[]|_IH_Team_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Team[]|_IH_Team_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Team sole(array|string $columns = ['*'])
     * @method Team updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Team_QB extends _BaseBuilder {}
    
    /**
     * @method User shift(int $count = 1)
     * @method User pop(int $count = 1)
     * @method User get($key, $default = null)
     * @method User pull($key, $default = null)
     * @method User first(callable $callback = null, $default = null)
     * @method User firstWhere(string $key, $operator = null, $value = null)
     * @method User find($key, $default = null)
     * @method User[] all()
     * @method User last(callable $callback = null, $default = null)
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCurrentTeamId($value)
     * @method _IH_User_QB whereProfilePhotoPath($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereTwoFactorSecret($value)
     * @method _IH_User_QB whereTwoFactorRecoveryCodes($value)
     * @method _IH_User_QB whereDeletedAt($value)
     * @method _IH_User_QB whereDisableBy($value)
     * @method _IH_User_QB whereDisableAt($value)
     * @method _IH_User_QB whereUsername($value)
     * @method _IH_User_QB whereMobile($value)
     * @method _IH_User_QB whereMobileVerifiedAt($value)
     * @method _IH_User_QB whereMobileVerifiedCode($value)
     * @method _IH_User_QB whereMobileVerifiedCodeExpireTime($value)
     * @method _IH_User_QB whereFirstName($value)
     * @method _IH_User_QB whereLastName($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null find($id, array $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User findOrFail($id, array $columns = ['*'])
     * @method User findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     * @method _IH_User_QB withTrashed()
     * @method _IH_User_QB onlyTrashed()
     * @method _IH_User_QB withoutTrashed()
     * @method _IH_User_QB restore()
     * @method _IH_User_QB permission(array|Collection|Permission|string $permissions)
     * @method _IH_User_QB role(array|Collection|Role|string $roles, string $guard = null)
     */
    class _IH_User_QB extends _BaseBuilder {}
    
    /**
     * @method productPriceHistory shift(int $count = 1)
     * @method productPriceHistory pop(int $count = 1)
     * @method productPriceHistory get($key, $default = null)
     * @method productPriceHistory pull($key, $default = null)
     * @method productPriceHistory first(callable $callback = null, $default = null)
     * @method productPriceHistory firstWhere(string $key, $operator = null, $value = null)
     * @method productPriceHistory find($key, $default = null)
     * @method productPriceHistory[] all()
     * @method productPriceHistory last(callable $callback = null, $default = null)
     */
    class _IH_productPriceHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return productPriceHistory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method productPriceHistory baseSole(array|string $columns = ['*'])
     * @method productPriceHistory create(array $attributes = [])
     * @method _IH_productPriceHistory_C|productPriceHistory[] cursor()
     * @method productPriceHistory|null find($id, array $columns = ['*'])
     * @method _IH_productPriceHistory_C|productPriceHistory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method productPriceHistory findOrFail($id, array $columns = ['*'])
     * @method productPriceHistory findOrNew($id, array $columns = ['*'])
     * @method productPriceHistory first(array|string $columns = ['*'])
     * @method productPriceHistory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method productPriceHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method productPriceHistory firstOrFail(array $columns = ['*'])
     * @method productPriceHistory firstOrNew(array $attributes = [], array $values = [])
     * @method productPriceHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method productPriceHistory forceCreate(array $attributes)
     * @method _IH_productPriceHistory_C|productPriceHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_productPriceHistory_C|productPriceHistory[] get(array|string $columns = ['*'])
     * @method productPriceHistory getModel()
     * @method productPriceHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_productPriceHistory_C|productPriceHistory[] hydrate(array $items)
     * @method productPriceHistory make(array $attributes = [])
     * @method productPriceHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|productPriceHistory[]|_IH_productPriceHistory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|productPriceHistory[]|_IH_productPriceHistory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method productPriceHistory sole(array|string $columns = ['*'])
     * @method productPriceHistory updateOrCreate(array $attributes, array $values = [])
     * @method _IH_productPriceHistory_QB withTrashed()
     * @method _IH_productPriceHistory_QB onlyTrashed()
     * @method _IH_productPriceHistory_QB withoutTrashed()
     * @method _IH_productPriceHistory_QB restore()
     */
    class _IH_productPriceHistory_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Illuminate\Notifications {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method DatabaseNotification shift(int $count = 1)
     * @method DatabaseNotification pop(int $count = 1)
     * @method DatabaseNotification get($key, $default = null)
     * @method DatabaseNotification pull($key, $default = null)
     * @method DatabaseNotification first(callable $callback = null, $default = null)
     * @method DatabaseNotification firstWhere(string $key, $operator = null, $value = null)
     * @method DatabaseNotification find($key, $default = null)
     * @method DatabaseNotification[] all()
     * @method DatabaseNotification last(callable $callback = null, $default = null)
     * @mixin DatabaseNotificationCollection
     */
    class _IH_DatabaseNotification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DatabaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method DatabaseNotification baseSole(array|string $columns = ['*'])
     * @method DatabaseNotification create(array $attributes = [])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] cursor()
     * @method DatabaseNotification|null find($id, array $columns = ['*'])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DatabaseNotification findOrFail($id, array $columns = ['*'])
     * @method DatabaseNotification findOrNew($id, array $columns = ['*'])
     * @method DatabaseNotification first(array|string $columns = ['*'])
     * @method DatabaseNotification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method DatabaseNotification firstOrCreate(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstOrFail(array $columns = ['*'])
     * @method DatabaseNotification firstOrNew(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DatabaseNotification forceCreate(array $attributes)
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] get(array|string $columns = ['*'])
     * @method DatabaseNotification getModel()
     * @method DatabaseNotification[] getModels(array|string $columns = ['*'])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] hydrate(array $items)
     * @method DatabaseNotification make(array $attributes = [])
     * @method DatabaseNotification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DatabaseNotification[]|_IH_DatabaseNotification_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DatabaseNotification[]|_IH_DatabaseNotification_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DatabaseNotification sole(array|string $columns = ['*'])
     * @method DatabaseNotification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_DatabaseNotification_QB read()
     * @method _IH_DatabaseNotification_QB unread()
     */
    class _IH_DatabaseNotification_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Laravel\Jetstream {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Jetstream\TeamInvitation;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method TeamInvitation shift(int $count = 1)
     * @method TeamInvitation pop(int $count = 1)
     * @method TeamInvitation get($key, $default = null)
     * @method TeamInvitation pull($key, $default = null)
     * @method TeamInvitation first(callable $callback = null, $default = null)
     * @method TeamInvitation firstWhere(string $key, $operator = null, $value = null)
     * @method TeamInvitation find($key, $default = null)
     * @method TeamInvitation[] all()
     * @method TeamInvitation last(callable $callback = null, $default = null)
     */
    class _IH_TeamInvitation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TeamInvitation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method TeamInvitation baseSole(array|string $columns = ['*'])
     * @method TeamInvitation create(array $attributes = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] cursor()
     * @method TeamInvitation|null find($id, array $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TeamInvitation findOrFail($id, array $columns = ['*'])
     * @method TeamInvitation findOrNew($id, array $columns = ['*'])
     * @method TeamInvitation first(array|string $columns = ['*'])
     * @method TeamInvitation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method TeamInvitation firstOrCreate(array $attributes = [], array $values = [])
     * @method TeamInvitation firstOrFail(array $columns = ['*'])
     * @method TeamInvitation firstOrNew(array $attributes = [], array $values = [])
     * @method TeamInvitation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TeamInvitation forceCreate(array $attributes)
     * @method _IH_TeamInvitation_C|TeamInvitation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] get(array|string $columns = ['*'])
     * @method TeamInvitation getModel()
     * @method TeamInvitation[] getModels(array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] hydrate(array $items)
     * @method TeamInvitation make(array $attributes = [])
     * @method TeamInvitation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TeamInvitation[]|_IH_TeamInvitation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TeamInvitation[]|_IH_TeamInvitation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TeamInvitation sole(array|string $columns = ['*'])
     * @method TeamInvitation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TeamInvitation_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Laravel\Passport {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Passport\AuthCode;
    use Laravel\Passport\Client;
    use Laravel\Passport\PersonalAccessClient;
    use Laravel\Passport\RefreshToken;
    use Laravel\Passport\Token;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method AuthCode shift(int $count = 1)
     * @method AuthCode pop(int $count = 1)
     * @method AuthCode get($key, $default = null)
     * @method AuthCode pull($key, $default = null)
     * @method AuthCode first(callable $callback = null, $default = null)
     * @method AuthCode firstWhere(string $key, $operator = null, $value = null)
     * @method AuthCode find($key, $default = null)
     * @method AuthCode[] all()
     * @method AuthCode last(callable $callback = null, $default = null)
     */
    class _IH_AuthCode_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AuthCode[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method AuthCode baseSole(array|string $columns = ['*'])
     * @method AuthCode create(array $attributes = [])
     * @method _IH_AuthCode_C|AuthCode[] cursor()
     * @method AuthCode|null find($id, array $columns = ['*'])
     * @method _IH_AuthCode_C|AuthCode[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AuthCode findOrFail($id, array $columns = ['*'])
     * @method AuthCode findOrNew($id, array $columns = ['*'])
     * @method AuthCode first(array|string $columns = ['*'])
     * @method AuthCode firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AuthCode firstOrCreate(array $attributes = [], array $values = [])
     * @method AuthCode firstOrFail(array $columns = ['*'])
     * @method AuthCode firstOrNew(array $attributes = [], array $values = [])
     * @method AuthCode firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AuthCode forceCreate(array $attributes)
     * @method _IH_AuthCode_C|AuthCode[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AuthCode_C|AuthCode[] get(array|string $columns = ['*'])
     * @method AuthCode getModel()
     * @method AuthCode[] getModels(array|string $columns = ['*'])
     * @method _IH_AuthCode_C|AuthCode[] hydrate(array $items)
     * @method AuthCode make(array $attributes = [])
     * @method AuthCode newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AuthCode[]|_IH_AuthCode_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AuthCode[]|_IH_AuthCode_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AuthCode sole(array|string $columns = ['*'])
     * @method AuthCode updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AuthCode_QB extends _BaseBuilder {}
    
    /**
     * @method Client shift(int $count = 1)
     * @method Client pop(int $count = 1)
     * @method Client get($key, $default = null)
     * @method Client pull($key, $default = null)
     * @method Client first(callable $callback = null, $default = null)
     * @method Client firstWhere(string $key, $operator = null, $value = null)
     * @method Client find($key, $default = null)
     * @method Client[] all()
     * @method Client last(callable $callback = null, $default = null)
     */
    class _IH_Client_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Client[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Client baseSole(array|string $columns = ['*'])
     * @method Client create(array $attributes = [])
     * @method _IH_Client_C|Client[] cursor()
     * @method Client|null find($id, array $columns = ['*'])
     * @method _IH_Client_C|Client[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Client findOrFail($id, array $columns = ['*'])
     * @method Client findOrNew($id, array $columns = ['*'])
     * @method Client first(array|string $columns = ['*'])
     * @method Client firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Client firstOrCreate(array $attributes = [], array $values = [])
     * @method Client firstOrFail(array $columns = ['*'])
     * @method Client firstOrNew(array $attributes = [], array $values = [])
     * @method Client firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Client forceCreate(array $attributes)
     * @method _IH_Client_C|Client[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Client_C|Client[] get(array|string $columns = ['*'])
     * @method Client getModel()
     * @method Client[] getModels(array|string $columns = ['*'])
     * @method _IH_Client_C|Client[] hydrate(array $items)
     * @method Client make(array $attributes = [])
     * @method Client newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Client[]|_IH_Client_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Client[]|_IH_Client_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Client sole(array|string $columns = ['*'])
     * @method Client updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Client_QB extends _BaseBuilder {}
    
    /**
     * @method PersonalAccessClient shift(int $count = 1)
     * @method PersonalAccessClient pop(int $count = 1)
     * @method PersonalAccessClient get($key, $default = null)
     * @method PersonalAccessClient pull($key, $default = null)
     * @method PersonalAccessClient first(callable $callback = null, $default = null)
     * @method PersonalAccessClient firstWhere(string $key, $operator = null, $value = null)
     * @method PersonalAccessClient find($key, $default = null)
     * @method PersonalAccessClient[] all()
     * @method PersonalAccessClient last(callable $callback = null, $default = null)
     */
    class _IH_PersonalAccessClient_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PersonalAccessClient[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method PersonalAccessClient baseSole(array|string $columns = ['*'])
     * @method PersonalAccessClient create(array $attributes = [])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] cursor()
     * @method PersonalAccessClient|null find($id, array $columns = ['*'])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PersonalAccessClient findOrFail($id, array $columns = ['*'])
     * @method PersonalAccessClient findOrNew($id, array $columns = ['*'])
     * @method PersonalAccessClient first(array|string $columns = ['*'])
     * @method PersonalAccessClient firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessClient firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessClient firstOrFail(array $columns = ['*'])
     * @method PersonalAccessClient firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessClient firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessClient forceCreate(array $attributes)
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] get(array|string $columns = ['*'])
     * @method PersonalAccessClient getModel()
     * @method PersonalAccessClient[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] hydrate(array $items)
     * @method PersonalAccessClient make(array $attributes = [])
     * @method PersonalAccessClient newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessClient[]|_IH_PersonalAccessClient_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PersonalAccessClient[]|_IH_PersonalAccessClient_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessClient sole(array|string $columns = ['*'])
     * @method PersonalAccessClient updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessClient_QB extends _BaseBuilder {}
    
    /**
     * @method RefreshToken shift(int $count = 1)
     * @method RefreshToken pop(int $count = 1)
     * @method RefreshToken get($key, $default = null)
     * @method RefreshToken pull($key, $default = null)
     * @method RefreshToken first(callable $callback = null, $default = null)
     * @method RefreshToken firstWhere(string $key, $operator = null, $value = null)
     * @method RefreshToken find($key, $default = null)
     * @method RefreshToken[] all()
     * @method RefreshToken last(callable $callback = null, $default = null)
     */
    class _IH_RefreshToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RefreshToken[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method RefreshToken baseSole(array|string $columns = ['*'])
     * @method RefreshToken create(array $attributes = [])
     * @method _IH_RefreshToken_C|RefreshToken[] cursor()
     * @method RefreshToken|null find($id, array $columns = ['*'])
     * @method _IH_RefreshToken_C|RefreshToken[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RefreshToken findOrFail($id, array $columns = ['*'])
     * @method RefreshToken findOrNew($id, array $columns = ['*'])
     * @method RefreshToken first(array|string $columns = ['*'])
     * @method RefreshToken firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RefreshToken firstOrCreate(array $attributes = [], array $values = [])
     * @method RefreshToken firstOrFail(array $columns = ['*'])
     * @method RefreshToken firstOrNew(array $attributes = [], array $values = [])
     * @method RefreshToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RefreshToken forceCreate(array $attributes)
     * @method _IH_RefreshToken_C|RefreshToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RefreshToken_C|RefreshToken[] get(array|string $columns = ['*'])
     * @method RefreshToken getModel()
     * @method RefreshToken[] getModels(array|string $columns = ['*'])
     * @method _IH_RefreshToken_C|RefreshToken[] hydrate(array $items)
     * @method RefreshToken make(array $attributes = [])
     * @method RefreshToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RefreshToken[]|_IH_RefreshToken_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RefreshToken[]|_IH_RefreshToken_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RefreshToken sole(array|string $columns = ['*'])
     * @method RefreshToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RefreshToken_QB extends _BaseBuilder {}
    
    /**
     * @method Token shift(int $count = 1)
     * @method Token pop(int $count = 1)
     * @method Token get($key, $default = null)
     * @method Token pull($key, $default = null)
     * @method Token first(callable $callback = null, $default = null)
     * @method Token firstWhere(string $key, $operator = null, $value = null)
     * @method Token find($key, $default = null)
     * @method Token[] all()
     * @method Token last(callable $callback = null, $default = null)
     */
    class _IH_Token_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Token[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Token baseSole(array|string $columns = ['*'])
     * @method Token create(array $attributes = [])
     * @method _IH_Token_C|Token[] cursor()
     * @method Token|null find($id, array $columns = ['*'])
     * @method _IH_Token_C|Token[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Token findOrFail($id, array $columns = ['*'])
     * @method Token findOrNew($id, array $columns = ['*'])
     * @method Token first(array|string $columns = ['*'])
     * @method Token firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Token firstOrCreate(array $attributes = [], array $values = [])
     * @method Token firstOrFail(array $columns = ['*'])
     * @method Token firstOrNew(array $attributes = [], array $values = [])
     * @method Token firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Token forceCreate(array $attributes)
     * @method _IH_Token_C|Token[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Token_C|Token[] get(array|string $columns = ['*'])
     * @method Token getModel()
     * @method Token[] getModels(array|string $columns = ['*'])
     * @method _IH_Token_C|Token[] hydrate(array $items)
     * @method Token make(array $attributes = [])
     * @method Token newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Token[]|_IH_Token_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Token[]|_IH_Token_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Token sole(array|string $columns = ['*'])
     * @method Token updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Token_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Laravel\Sanctum {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method PersonalAccessToken shift(int $count = 1)
     * @method PersonalAccessToken pop(int $count = 1)
     * @method PersonalAccessToken get($key, $default = null)
     * @method PersonalAccessToken pull($key, $default = null)
     * @method PersonalAccessToken first(callable $callback = null, $default = null)
     * @method PersonalAccessToken firstWhere(string $key, $operator = null, $value = null)
     * @method PersonalAccessToken find($key, $default = null)
     * @method PersonalAccessToken[] all()
     * @method PersonalAccessToken last(callable $callback = null, $default = null)
     */
    class _IH_PersonalAccessToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PersonalAccessToken[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PersonalAccessToken_QB whereId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableType($value)
     * @method _IH_PersonalAccessToken_QB whereName($value)
     * @method _IH_PersonalAccessToken_QB whereToken($value)
     * @method _IH_PersonalAccessToken_QB whereAbilities($value)
     * @method _IH_PersonalAccessToken_QB whereLastUsedAt($value)
     * @method _IH_PersonalAccessToken_QB whereCreatedAt($value)
     * @method _IH_PersonalAccessToken_QB whereUpdatedAt($value)
     * @method PersonalAccessToken baseSole(array|string $columns = ['*'])
     * @method PersonalAccessToken create(array $attributes = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] cursor()
     * @method PersonalAccessToken|null find($id, array $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PersonalAccessToken findOrFail($id, array $columns = ['*'])
     * @method PersonalAccessToken findOrNew($id, array $columns = ['*'])
     * @method PersonalAccessToken first(array|string $columns = ['*'])
     * @method PersonalAccessToken firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessToken firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstOrFail(array $columns = ['*'])
     * @method PersonalAccessToken firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessToken forceCreate(array $attributes)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] get(array|string $columns = ['*'])
     * @method PersonalAccessToken getModel()
     * @method PersonalAccessToken[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] hydrate(array $items)
     * @method PersonalAccessToken make(array $attributes = [])
     * @method PersonalAccessToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessToken sole(array|string $columns = ['*'])
     * @method PersonalAccessToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessToken_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Spatie\Permission\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission as Permission1;
    use Spatie\Permission\Contracts\Role;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role as Role1;
    
    /**
     * @method Permission shift(int $count = 1)
     * @method Permission pop(int $count = 1)
     * @method Permission get($key, $default = null)
     * @method Permission pull($key, $default = null)
     * @method Permission first(callable $callback = null, $default = null)
     * @method Permission firstWhere(string $key, $operator = null, $value = null)
     * @method Permission find($key, $default = null)
     * @method Permission[] all()
     * @method Permission last(callable $callback = null, $default = null)
     */
    class _IH_Permission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Permission[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Permission_QB whereId($value)
     * @method _IH_Permission_QB whereName($value)
     * @method _IH_Permission_QB whereGuardName($value)
     * @method _IH_Permission_QB whereCreatedAt($value)
     * @method _IH_Permission_QB whereUpdatedAt($value)
     * @method Permission baseSole(array|string $columns = ['*'])
     * @method Permission create(array $attributes = [])
     * @method _IH_Permission_C|Permission[] cursor()
     * @method Permission|null find($id, array $columns = ['*'])
     * @method _IH_Permission_C|Permission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Permission findOrFail($id, array $columns = ['*'])
     * @method Permission findOrNew($id, array $columns = ['*'])
     * @method Permission first(array|string $columns = ['*'])
     * @method Permission firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Permission firstOrCreate(array $attributes = [], array $values = [])
     * @method Permission firstOrFail(array $columns = ['*'])
     * @method Permission firstOrNew(array $attributes = [], array $values = [])
     * @method Permission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Permission forceCreate(array $attributes)
     * @method _IH_Permission_C|Permission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Permission_C|Permission[] get(array|string $columns = ['*'])
     * @method Permission getModel()
     * @method Permission[] getModels(array|string $columns = ['*'])
     * @method _IH_Permission_C|Permission[] hydrate(array $items)
     * @method Permission make(array $attributes = [])
     * @method Permission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Permission[]|_IH_Permission_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Permission[]|_IH_Permission_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Permission sole(array|string $columns = ['*'])
     * @method Permission updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Permission_QB permission(array|Collection|Permission1|string $permissions)
     * @method _IH_Permission_QB role(array|Collection|Role|string $roles, string $guard = null)
     */
    class _IH_Permission_QB extends _BaseBuilder {}
    
    /**
     * @method Role1 shift(int $count = 1)
     * @method Role1 pop(int $count = 1)
     * @method Role1 get($key, $default = null)
     * @method Role1 pull($key, $default = null)
     * @method Role1 first(callable $callback = null, $default = null)
     * @method Role1 firstWhere(string $key, $operator = null, $value = null)
     * @method Role1 find($key, $default = null)
     * @method Role1[] all()
     * @method Role1 last(callable $callback = null, $default = null)
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role1[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB whereGuardName($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role1 baseSole(array|string $columns = ['*'])
     * @method Role1 create(array $attributes = [])
     * @method _IH_Role_C|Role1[] cursor()
     * @method Role1|null find($id, array $columns = ['*'])
     * @method _IH_Role_C|Role1[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Role1 findOrFail($id, array $columns = ['*'])
     * @method Role1 findOrNew($id, array $columns = ['*'])
     * @method Role1 first(array|string $columns = ['*'])
     * @method Role1 firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Role1 firstOrCreate(array $attributes = [], array $values = [])
     * @method Role1 firstOrFail(array $columns = ['*'])
     * @method Role1 firstOrNew(array $attributes = [], array $values = [])
     * @method Role1 firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role1 forceCreate(array $attributes)
     * @method _IH_Role_C|Role1[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role1[] get(array|string $columns = ['*'])
     * @method Role1 getModel()
     * @method Role1[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role1[] hydrate(array $items)
     * @method Role1 make(array $attributes = [])
     * @method Role1 newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role1[]|_IH_Role_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role1[]|_IH_Role_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role1 sole(array|string $columns = ['*'])
     * @method Role1 updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Role_QB permission(array|Collection|Permission1|string $permissions)
     */
    class _IH_Role_QB extends _BaseBuilder {}
}