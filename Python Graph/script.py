from collections import defaultdict

class Graph:
    def __init__(self):
        self.graph = defaultdict(list)

    def add_edge(self, u, v):
        self.graph[u].append(v)

    def is_path_dfs(self, start, end):
        visited = set()
        return self._is_path_dfs(start, end, visited)

    def _is_path_dfs(self, node, end, visited):
        if node == end:
            return True
        visited.add(node)
        for neighbor in self.graph[node]:
            if neighbor not in visited:
                if self._is_path_dfs(neighbor, end, visited):
                    return True
        return False

    def is_path_bfs(self, start, end):
        visited = set()
        queue = []
        queue.append(start)
        visited.add(start)

        while queue:
            node = queue.pop(0)
            if node == end:
                return True
            for neighbor in self.graph[node]:
                if neighbor not in visited:
                    queue.append(neighbor)
                    visited.add(neighbor)
        return False

# Příklad použití:
g = Graph()
g.add_edge(0, 1)
g.add_edge(0, 2)
g.add_edge(1, 2)
g.add_edge(2, 0)
g.add_edge(2, 3)
g.add_edge(3, 3)

start_node = 0
end_node = 3

if g.is_path_dfs(start_node, end_node):
    print(f"Cesta mezi uzly {start_node} a {end_node} existuje (DFS).")
else:
    print(f"Cesta mezi uzly {start_node} a {end_node} neexistuje (DFS).")

if g.is_path_bfs(start_node, end_node):
    print(f"Cesta mezi uzly {start_node} a {end_node} existuje (BFS).")
else:
    print(f"Cesta mezi uzly {start_node} a {end_node} neexistuje (BFS).")
