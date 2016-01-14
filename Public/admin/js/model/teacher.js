var base_url = '/admin/api/teacher/'
var api={
  list: base_url+'teachers?page=',
  new: base_url+'',
  show: base_url+'show?uid=',
  delete: base_url+'destroy?uid=',
  get_cover: base_url+'getCover?uid='
}
var theApp = 'teacherApp';
var theController = 'teacherCtrl';
